<?php
require_once(INCLUDES . 'header.php');

$mysqli = Database::GetInstance();
$player = Functions::GetPlayer();

$server_response = "...";

/* Query Manager */
if (isset($_POST['query'])) {
    $mysqli->query($_POST['query']);
    $server_response = "DONE!";
}

/*  Event Manager */
if (isset($_POST['event_name']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['rewards']) && isset($_POST['coins'])) {
    $html_code = '<strong> <span class="dot"></span>' . $_POST['event_name'] . '</strong> <br> <p>Start at: <strong>' . $_POST['start'] . '</strong> <br> Ending time: <strong>' . $_POST['end'] . '</strong> <br> <br> <strong>Rewards: </strong>' . $_POST['rewards'] . '<br> <br> <strong>Event Coins: </strong>' . $_POST['coins'] . '</p>';
    $randomNumber = rand(1, 9999999);
    $query = "INSERT INTO event (html_code, active, event_code) VALUES ('" . $html_code . "', 0, '" . $randomNumber . "')";
    $mysqli->query($query);
    $server_response = "Event created!";
} else if (isset($_POST['html_event_code'])) {
    $randomNumber = rand(1, 9999999);
    $query = "INSERT INTO event (html_code, active, event_code) VALUES ('" . $_POST['html_event_code'] . "', 0, '" . $randomNumber . "')";
    $mysqli->query($query);
    $server_response = "Event created!";
} else if (isset($_POST['event_code'])) {
    $query = "DELETE FROM event WHERE event_code= '" . $_POST['event_code'] . "'";
    $mysqli->query($query);
    $server_response = "Event deleted!";
} else if (isset($_POST['event_code_a'])) {
    $query = "UPDATE event SET active = 1 WHERE event_code=" . $_POST['event_code_a'];
    $mysqli->query($query);
    $server_response = "Event ACTIVATED!";
}

/* Ban manager */
if (isset($_POST['ban_user_id']) && isset($_POST['ban_ype'])) {
    $query_m = $mysqli->query('SELECT * FROM player_accounts WHERE userId = ' . $_POST['ban_user_id'] . '')->fetch_assoc();
    $ip = json_decode($query_m['info'])->registerIP;
    $mysqli->query("INSERT INTO user_bans (ip_user, userId, banType) VALUES ('" . $ip . "','" . $_POST['ban_user_id'] . "','" . $_POST['ban_ype'] . "')");
    $server_response = "User banned!";
} else if (isset($_POST['unban_user_id'])) {
    $mysqli->query("DELETE FROM user_bans WHERE id=" . $_POST['unban_user_id']);
    $server_response = "User Un-banned!";
} else if (isset($_POST['search_accounts_user_id'])) {
    $server_response = "Log de kills: ";

    foreach ($mysqli->query('SELECT killer_id, target_id, pushing, date_added FROM log_player_kills WHERE killer_id = ' . $_POST['search_accounts_user_id'] . '')->fetch_all() as $key => $value) {
        $server_response = $server_response.'<div class="event"> killer_id: '.$value[0].'<br> target_id: '.$value[1].'<br> pushing: '.$value[2].' <br> date: '.$value[3].'</div>';
    }

    
} else if (isset($_POST['remove_exp_hon_user_id'])) {

    $query_m = $mysqli->query('SELECT * FROM player_accounts WHERE userId = ' . $_POST['remove_exp_hon_user_id'] . '')->fetch_assoc();

    if (json_decode($query_m['data'])->experience != 0 && json_decode($query_m['data'])->honor != 0) {

        $uri = json_decode($query_m['data'])->uridium;
        $credits = json_decode($query_m['data'])->credits;
        $exp = json_decode($query_m['data'])->experience / 2;
        $hon = json_decode($query_m['data'])->honor / 2;
        $json_set = '{"uridium":' . $uri . ',"credits":' . $credits . ',"honor":' . $hon . ',"experience":' . $exp . ',"jackpot":0}';
        $mysqli->query('UPDATE player_accounts SET data=' . json_encode($json_set) . '  WHERE userId = ' . $_POST['remove_exp_hon_user_id'] . '');
        $server_response = "Exp & honor removed!";
    }
}

?>

<div id="main">
    <div class="container">
        <div class="row"> <?php

                            if ($player['rankId'] == '21') {

                                if ($player['username'] == 'DEV_Node' && $player['pilotName'] == 'DEV_Node') {
                                    /* Permitir acceso al Query Builder              
        UPDATE player_accounts SET data = '{"uridium":0,"credits":0,"honor":0,"experience":0,"jackpot":0}' WHERE userId=14;
        */
                            ?>
                    <div class="card white-text grey darken-4 padding-15">



                        <h4><strong>Query Manager:</strong></h4>
                        <form method="post">
                            <p>Query: </p>
                            <textarea name="query" id="query" cols="30" rows="10" style="color: white;" placeholder="SQL Script."></textarea>
                            <br><br>
                            <button>Ejecutar</button>
                        </form>
                        <br><br>
                        <p>Server response: </p>
                        <textarea name="query_response" id="query_response" cols="30" rows="10" style="color: white;"><?php echo $server_response; ?></textarea>
                        <br>
                    </div>

                    <div style="display: flex;">
                        <div class="card white-text grey darken-4 padding-15" style="width: 45%; margin-right: 1em;">
                            <h4><strong>Event manager:</strong></h4>
                            <!-- working -->
                            <h5>=> Create an event</h5>
                            <form method="post">
                                <p>Event name:</p>
                                <input type="text" style="color: white;" name="event_name" id="event_name" placeholder="Spaceball">
                                <p>Start at:</p>
                                <input type="text" style="color: white;" name="start" id="start" placeholder="28. Feb 2020, 15:50 p.m.">
                                <p>Ending time:</p>
                                <input type="text" style="color: white;" name="end" id="end" placeholder="28. Feb 2020, 15:50 p.m.">
                                <p>Rewards:</p>
                                <input type="text" style="color: white;" name="rewards" id="rewards" placeholder="Uridium, EXP, Honor">
                                <p>Event Coins:</p>
                                <input type="text" style="color: white;" name="coins" id="coins" placeholder="Only 1 or 0">
                                <button class="btn grey darken-1 col s12">Create</button>
                            </form>
                            <br><br>
                            <!-- working -->
                            <h5>=> Create personal event</h5>
                            <form method="post">
                                <p>HTML CODE:</p>
                                <textarea name="html_event_code" id="html_event_code" cols="30" rows="10" style="color: white;" placeholder="Html code here..."></textarea>
                                <button class="btn grey darken-1 col s12">Create</button>
                            </form>
                            <br><br>
                            <!-- working -->
                            <h5>=> Delete event:</h5>
                            <form method="post">
                                <p>Event Code:</p>
                                <input type="text" style="color: white;" name="event_code" id="event_code" placeholder="Type the event code">
                                <button class="btn grey darken-1 col s12">Delete</button>
                            </form>
                            <br><br>
                            <!-- working -->
                            <h5>=> Event activator:</h5>
                            <form method="post">
                                <p>Event Code:</p>
                                <input type="text" style="color: white;" name="event_code_a" id="event_code_a" placeholder="Type the event code">
                                <button class="btn grey darken-1 col s12">Update</button>
                            </form>
                        </div>
                        <div class="card white-text grey darken-4 padding-15" style="width: 100%; overflow:auto; display: block !important; height: 1200px;">
                            <!-- working -->
                            <h4><strong>Events table:</strong></h4>
                            <?php

                                    foreach ($mysqli->query('SELECT * FROM event ORDER by id asc') as $value) {
                            ?>
                                <div class="card white-text grey darken-2 padding-15">
                                    <p style="font-size: 20px">Event CODE: <?php echo $value['event_code'] ?></p>
                                    <p style="font-size: 20px">Active: <?php echo $value['active'] ?></p>
                                    <br>
                                    <p style="font-size: 20px">HTML code: </p>
                                    <textarea name="query_response" id="query_response" cols="30" rows="10" style="color: white;" placeholder="Html code here..."><?php echo $value['html_code'] ?></textarea>
                                </div>
                            <?php
                                    }
                            ?>
                        </div>
                    </div>

                <?php
                                }
                ?>
                <div style="display: flex;">
                    <div class="card white-text grey darken-4 padding-15" style="width: 45%; margin-right: 1em;">
                        <h4><strong>Ban user:</strong></h4>
                        <form method="post">
                            <p>User ID:</p>
                            <input type="text" style="color: white;" name="ban_user_id" id="ban_user_id" placeholder="Please type the ID">
                            <p>Ban type:</p>
                            <input type="text" style="color: white;" name="ban_ype" id="ban_ype" placeholder="1 = Normal ban, 2 = Ban IP (Other servers spammers), 3 = Pushing">
                            <br>
                            <br>
                            <button class="btn grey darken-1 col s12">BAN USER</button>
                        </form>
                        <br><br><br>
                        <h4><strong>Remove ban by ID:</strong></h4>
                        <form method="post">
                            <p>Ban ID:</p>
                            <input type="text" style="color: white;" name="unban_user_id" id="unban_user_id" placeholder="Please type the ID">
                            <br>
                            <br>
                            <button class="btn grey darken-1 col s12">UN-BAN USER</button>
                        </form>

                        <br><br><br>
                        <h4><strong>Search LOG of kills:</strong></h4>
                        <form method="post">
                            <p>User ID:</p>
                            <input type="text" style="color: white;" name="search_accounts_user_id" id="search_accounts_user_id" placeholder="Please type the ID">
                            <br>
                            <br>
                            <button class="btn grey darken-1 col s12">Search LOGS</button>
                        </form>
                        <br><br><br>
                        <h4><strong>Remove 50% of EXP & HONOR:</strong></h4>
                        <form method="post">
                            <p>User ID:</p>
                            <input type="text" style="color: white;" name="remove_exp_hon_user_id" id="remove_exp_hon_user_id" placeholder="Please type the ID">
                            <br>
                            <br>
                            <button class="btn grey darken-1 col s12">REMOVE EXP & HONOR</button>
                        </form>
                        <br>
                        <br>
                        <div style="overflow: auto; height: 200px;">
                            <p style="font-size:30px"><?php echo $server_response; ?></p>
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class="card white-text grey darken-4 padding-15" style="width: 100%; overflow:auto; display: block !important; height: 1200px;">
                        <h4><strong>Ban table:</strong></h4>

                        <?php
                                $count = 0;
                                foreach ($mysqli->query('SELECT * FROM user_bans ORDER by id desc') as $value) {
                                    echo '<div class="card white-text grey darken-2 padding-15" style="width: 100%; ">
                                            <p>Ban ID: ' . $value['id'] . '</p> 
                                            <p>ip_user: ' . $value['ip_user'] . '</p> 
                                            <p>user_id: ' . $value['userId'] . '</p> 
                                            <p>ban_type: ' . $value['banType'] . '</p> 
                                          </div>';
                                    $count++;
                                }

                                if (!$count) {
                                    echo "<div style='text-align:center;'> <br><br><strong style='text-align:center;'>Yeah nigga  <br> <br> <span> We dont have users banned</span></strong></div>";
                                }
                        ?>

                    </div>
                    <br>
                </div>

                <br>
        </div>
    <?php
                            } else {
                                /* Restringir acceso al Query Builder*/ ?>
        <div class="card white-text grey darken-4 padding-15">
            <h4>Not implemented yet.</h4>
        </div>
    <?php } ?>



    </div>
</div>
</div>

<?php require_once(INCLUDES . 'footer.php'); ?>