<?php require_once(INCLUDES . 'header.php');
$mysqli = Database::GetInstance();
?>

<div id="main">
    <div class="container">
        <div class="row">
            <?php
            if (isset($_POST['code'])) {

                $search_active_event = $mysqli->query("SELECT * FROM event WHERE active = 1 AND event_code='" . $_POST['code'] . "';");

                if (mysqli_num_rows($search_active_event) > 0) {
                    $search_participation = $mysqli->query("SELECT * FROM event_participation WHERE userId = " . $player['userId'] . " AND event_code='" . $_POST['code'] . "';");

                    if (mysqli_num_rows($search_participation) > 0) { ?>
                        <div class="card white-text grey darken-4 padding-15">
                            <h3> <strong>Hey! The prize has already been claimed ;)</strong> <br> With ❤ DeathSpace Team.</h3>
                        </div>
                        <?php
                    } else {
                        $search_event_coins = $mysqli->query("SELECT * FROM event_coins WHERE userId = " . $player['userId'] . ";");

                        if (mysqli_num_rows($search_event_coins) > 0) {
                            /* sumarle los coins */
                            $current_coins = $search_event_coins->fetch_assoc();
                            $current_coins['coins'] += 1;
                            $mysqli->query("UPDATE event_coins SET coins = " . $current_coins['coins'] . ";");
                            $mysqli->query("INSERT INTO event_participation (userId, event_code) VALUES (" . $player['userId'] . ", " . $_POST['code'] . ");");
                        ?>
                            <div class="card white-text grey darken-4 padding-15">
                                <h3> <strong>+1 Event coin in your account :)</strong> <br> With ❤ DeathSpace Team.</h3>
                            </div>
                        <?php
                        } else {
                            $mysqli->query("INSERT INTO event_coins (coins, userId) VALUES (1, " . $player['userId'] . ");");
                            $mysqli->query("INSERT INTO event_participation (userId, event_code) VALUES (" . $player['userId'] . ", " . $_POST['code'] . ");");
                        ?>
                            <div class="card white-text grey darken-4 padding-15">
                                <h3> <strong>+1 Event coin in your account :)</strong> <br> With ❤ DeathSpace Team.</h3>
                            </div>
                    <?php
                        }
                    }
                } else { ?>
                    <div class="card white-text grey darken-4 padding-15">
                        <h4>Not implemented yet.</h4>
                    </div>
                <?php

                }
            } else { ?>
                <div class="card white-text grey darken-4 padding-15">
                    <h4>Not implemented yet.</h4>
                </div>
            <?php
            }

            ?>

        </div>
    </div>
</div>

<?php require_once(INCLUDES . 'footer.php'); ?>