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
    $query = "DELETE * FROM event WHERE event_code=" . $_POST['event_code'];
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


                    <div class="card white-text grey darken-4 padding-15">
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
                            <input type="text" style="color: white;" name="coins" id="coins" placeholder="0">
                            <button>Create</button>
                        </form>
                        <br><br>
                        <!-- working -->
                        <h5>=> Create personal event</h5>
                        <form method="post">
                            <p>HTML CODE:</p>
                            <textarea name="html_event_code" id="html_event_code" cols="30" rows="10" style="color: white;" placeholder="Html code here..."></textarea>
                            <button>Create</button>
                        </form>
                        <br><br>
                        <!-- working -->
                        <h5>=> Delete event:</h5>
                        <form method="post">
                            <p>Event Code:</p>
                            <input type="text" style="color: white;" name="event_code" id="event_code" placeholder="0152465">
                            <button>Delete</button>
                        </form>
                        <br><br>
                        <!-- working -->
                        <h5>=> Event activator:</h5>
                        <form method="post">
                            <p>Event Code:</p>
                            <input type="text" style="color: white;" name="event_code_a" id="event_code_a" placeholder="1 = Buton to get coin, 0 = Event inactive.">
                            <button>Update</button>
                        </form>
                        <br><br>
                        <!-- working -->
                        <h5>* Events created:</h5>
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
                <?php
                                }
                ?>
                <div class="card white-text grey darken-4 padding-15">
                    <h4><strong>Ban user:</strong></h4>
                    <form method="post">
                        <p>User ID:</p>
                        <input type="text" style="color: white;" name="ban_user_id" id="ban_user_id" placeholder="Please type the ID">
                        <p>Ban type:</p>
                        <input type="text" style="color: white;" name="ban_ype" id="ban_ype" placeholder="1 = Only ban user, 2 = Ban IP (Other servers spammers)">
                        <br>
                        <br>
                        <p style="font-size:30px"><?php echo $server_response;?></p>
                        <br>
                        <br>
                        <button class="btn grey darken-1 col s12">BAN USER</button>
                    </form>
                    <br>
                    <br>
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