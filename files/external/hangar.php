<?php require_once(INCLUDES . 'header.php'); ?>

<div class="main-container-header">
    <div class="container-header">
        <div class="user-stats">
            <p class="user-stats-id">ID: <?php echo $player['userId']; ?></p>
            <p class="user-stats-lvl">LVL: <?php echo Functions::GetLevel($data->experience); ?></p>
            <p class="user-stats-exp">EXP: <?php echo number_format($data->experience, 0, ',', '.'); ?></p>
            <p class="user-stats-hon">HON: <?php echo number_format($data->honor, 0, ',', '.'); ?></p>
        </div>
        <div class="action-buttons">
            <button class="button-invisible invisible-home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></button>
            <button class="button-invisible invisible-user"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></button>
            <button class="button-invisible invisible-exit"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></button>
        </div>
        <div class="container-header-ship">
            <div class="container-iris">
                <img src="https://darkorbit-22.bpsecure.com/do_img/global/items/drone/iris-1_100x100.png" width="50">
            </div>
            <div class="container-ship">
                <img src="https://darkorbit-22.bpsecure.com/do_img/global/items/ship/phoenix_100x100.png">
            </div>
            <div class="container-pet">
                <img src="https://darkorbit-22.bpsecure.com/do_img/global/items/pet/pet10_100x100.png" width="50">
            </div>
        </div>
        <div class="container-main-menu">
            <div class="left-buttons">
                <div class="left-button-top">
                    <button class="button-menu">HANGAR</button>
                </div>
                <div class="left-button-mid">
                    <button class="button-menu">CLAN</button>
                    <button class="button-menu">SKYLAB</button>
                </div>
                <div class="left-button-bot">
                    <button class="button-menu">BONUS</button>
                    <button class="button-menu">PROFILE</button>
                </div>
            </div>
            <div class="center-buttons">
                <button class="start-button">START</button>
                <p class="premium-text">PREMIUM</p>
            </div>
            <div class="right-buttons">
                <div class="right-button-top">
                    <button class="button-menu">MISSIONS</button>
                </div>
                <div class="right-button-mid">
                    <button class="button-menu">URIDIUM</button>
                    <button class="button-menu">SHOP</button>
                </div>
                <div class="right-button-bot">
                    <button class="button-menu">GATES</button>
                    <button class="button-menu">AUCTIONS</button>
                </div>
            </div>
        </div>
        <div class="container-money user-stats">
            <p><?php echo number_format($data->uridium, 0, ',', '.'); ?></p>
            <p><?php echo number_format($data->credits, 0, ',', '.'); ?></p>
        </div>
    </div>
</div>

<!-- website content -->
<div class="main-container-content">
    <div class="row">
        <button class="button-hangar">SHIPS</button>
        <button class="button-hangar">EQUIPMENT</button>
        <div style="padding: 20px;">
            <div class="wrapper">
                <?php
                const PHOENIX = 1;
                const PIRANHA = 6;
                const NOSTROMO = 7;
                const BIGBOY = 9;
                const LEONOV = 3;
                const VENGEANCE = 8;
                const GOLIATH = 10;

                $player = Functions::GetPlayer();

                $availableShips = array(PHOENIX, PIRANHA, NOSTROMO, BIGBOY, LEONOV, VENGEANCE, GOLIATH);

                $items = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $player['userId'] . '')->fetch_assoc()['items']);
                //if (in_array($player['shipId'], $items->ships)) {
                for ($i = 0; $i < 7; $i++) {
                ?>
                    <button onclick="changeShip(<?php echo $availableShips[$i]; ?>)">
                        <div class="ship-wrapper">
                            <div class="absolute-container">
                                <div class="ship-name">
                                    <?php
                                    switch ($availableShips[$i]) {
                                        case PHOENIX:
                                            echo "Phoenix";
                                            break;
                                        case PIRANHA:
                                            echo "Piranha";
                                            break;
                                        case NOSTROMO:
                                            echo "Nostromo";
                                            break;
                                        case BIGBOY:
                                            echo "Bigboy";
                                            break;
                                        case LEONOV:
                                            echo "Leonov";
                                            break;
                                        case VENGEANCE:
                                            echo "Vengeance";
                                            break;
                                        case GOLIATH:
                                            echo "Goliath";
                                            break;
                                    }
                                    ?>
                                </div>
                                <div class="ship-selected">
                                    <?php
                                    echo in_array($availableShips[$i], $items->ships) ? "O" : "X";
                                    ?>
                                </div>
                            </div>
                            <?php
                            $shipSelected = "phoenix";
                            switch ($availableShips[$i]) {
                                case PHOENIX:
                                    $shipSelected = "phoenix";
                                    break;
                                case PIRANHA:
                                    $shipSelected = "piranha";
                                    break;
                                case NOSTROMO:
                                    $shipSelected = "nostromo";
                                    break;
                                case BIGBOY:
                                    $shipSelected = "bigboy";
                                    break;
                                case LEONOV:
                                    $shipSelected = "leonov";
                                    break;
                                case VENGEANCE:
                                    $shipSelected = "vengeance";
                                    break;
                                case GOLIATH:
                                    $shipSelected = "goliath";
                                    break;
                            }
                            echo '<img src="do_img/global/' . $shipSelected . '_100x100.png" width="110px" height="110px" style="background-color: gray;">';
                            ?>
                        </div>
                    </button>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Ship elements -->
        <div class="col-8">
            <p>Configuration</p>
            <button style="background-color: black; border: none;">1</button>
            <button style="background-color: black; border: none;">2</button>
            <br><br>
            <button style="background-color: black; border: none;">SHIP</button>
            <button style="background-color: black; border: none;">VANTS</button>
            <button style="background-color: black; border: none;">P.E.T.</button>
            <br><br>
            <p>Lasers</p>
            <div class="wrapper2">
                <div>
                    1
                </div>
                <div>
                    2
                </div>
                <div>
                    3
                </div>
                <div>
                    4
                </div>
                <div>
                    5
                </div>
                <div>
                    1
                </div>
                <div>
                    2
                </div>
                <div>
                    3
                </div>
                <div>
                    4
                </div>
                <div>
                    5
                </div>
                <div>
                    1
                </div>
                <div>
                    2
                </div>
                <div>
                    3
                </div>
                <div>
                    4
                </div>
                <div>
                    5
                </div>
            </div>
            <p>Generators</p>
            <div class="wrapper2">
                <div>
                    1
                </div>
                <div>
                    2
                </div>
                <div>
                    3
                </div>
                <div>
                    4
                </div>
                <div>
                    5
                </div>
                <div>
                    1
                </div>
                <div>
                    2
                </div>
                <div>
                    3
                </div>
                <div>
                    4
                </div>
                <div>
                    5
                </div>
                <div>
                    1
                </div>
                <div>
                    2
                </div>
                <div>
                    3
                </div>
                <div>
                    4
                </div>
                <div>
                    5
                </div>
            </div>
        </div>
        <!-- Vants -->
        <div class="col-4">
            <p>Inventory</p>
            <div class="wrapper3">
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/lf-1_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/mp-1_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/lf-2_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/lf-3_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/g3n-1010_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/g3n-2010_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/g3n-3210_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/g3n-3310_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/g3n-6900_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/g3n-7900_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/sg3n-a01_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/sg3n-a02_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/sg3n-a03_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/sg3n-b01_100x100.png" width="50" class="img-item">
                </div>
                <div>
                    <p>0</p>
                    <img src="/do_img/global/inventory/sg3n-b02_100x100.png" width="50" class="img-item">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="snackbar">Some text some message..</div>
<?php require_once(INCLUDES . 'footer.php'); ?>