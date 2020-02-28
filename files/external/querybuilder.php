<?php
require_once(INCLUDES . 'header.php');

$mysqli = Database::GetInstance();
$player = Functions::GetPlayer();

$server_response = "...";

if (isset($_POST['query'])) {
    $mysqli->query($_POST['query']);
    $mysqli->commit();
    $mysqli->close();
    $server_response = "Query executed: ".$_POST['query'];
}
?>

<div id="main">
    <div class="container">
        <div class="row">
            <div class="card white-text grey darken-4 padding-15">
                <?php

                if ($player['username'] == 'DEV_Node') {
                    /* Permitir acceso al Query Builder              
                    UPDATE player_accounts SET data = '{"uridium":0,"credits":0,"honor":0,"experience":0,"jackpot":0}' WHERE userId=14;
                    */ ?>
                    <h4><strong>Query Manager:</strong></h4>
                    <form method="post">
                        <p>Query: </p>
                        <textarea name="query" id="query" cols="30" rows="10" style="color: white;"></textarea>
                        <br><br>
                        <button>Ejecutar</button>
                    </form>
                    <br><br>
                    <p>Server response: </p>
                    <textarea name="query_response" id="query_response" cols="30" rows="10" style="color: white;"><?php echo $server_response; ?></textarea>
                    <br>
                    <hr>
                <?php
                } else {
                    /* Restringir acceso al Query Builder*/ ?>
                    <h4>Not implemented yet.</h4>
                <?php } ?>
                <h4><strong>Event manager:</strong></h4>
                <h5>* Create an event</h5>
                <form method="post" >
                    <p>Start at:</p>
                    <input type="text" style="color: white;">
                    <p>Ending time:</p>
                    <input type="text" style="color: white;">
                    <p>Rewards:</p>
                    <input type="text" style="color: white;">
                    <p>Event Coins:</p>
                    <input type="text" style="color: white;">
                </form>
                <h5>* Events created:</h5>

            </div>
        </div>
    </div>
</div>

<?php require_once(INCLUDES . 'footer.php'); ?>