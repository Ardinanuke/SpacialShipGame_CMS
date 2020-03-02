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
                    /*
                        1. Buscar si el evento esta activo. si no arrojarlo a la pagina por defecto [x]
                        2. Buscar si tiene participacion con el codigo del evento. Si TIENE participacion arrojarle "Ya has reclamado esta recompenza" si no, "Felicidades has obtenido ${numEventCoins
                    */
                    $search_participation = $mysqli->query("SELECT * FROM event_participation WHERE userId = " . $player['userId'] . " AND event_code='" . $_POST['code'] . "';");

                    if (mysqli_num_rows($search_participation) > 0) { ?>
                        <div class="card white-text grey darken-4 padding-15">
                            <h4>Hey! The prize has already been claimed ;)</h4>
                        </div>
                    <?php
                    } else {
                        $search_event_coins = $mysqli->query("SELECT * FROM event_coins WHERE userId = " . $player['userId'] . ";");
                        if (mysqli_num_rows($search_event_coins) > 0) { 
                            /* sumarle los coins */
                        }else{
                            /* crearlo en la tabla con los coins */
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