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
            <div class="stats-container">
                <?php
                $player = Functions::GetPlayer();

                $equipment = $mysqli->query("SELECT * FROM player_equipment WHERE userId = {$player['userId']}")->fetch_assoc();
                $currentShip = $mysqli->query("SELECT * FROM server_ships WHERE shipID = {$player['shipId']}")->fetch_assoc();

                //User equipment
                $config1_lasers =  explode(",", $equipment["config1_lasers"]);
                if ($equipment["config1_lasers"] !== "[]") {
                    //Busca en bucle
                    $arrayItem = $equipment["config1_lasers"];
                    $arrayItem = str_replace("[", " ", $arrayItem);
                    $arrayItem = str_replace("]", " ", $arrayItem);
                    $arrayItem =  explode(",", $arrayItem);
                    $quantityLf1 = 0;
                    $quantityLf2 = 0;
                    $quantityLf3 = 0;
                    for ($i = 0; $i < sizeof($arrayItem); $i++) {
                        switch ($arrayItem[$i]) {
                            case 1:
                                $quantityLf1++;
                                break;
                            case 2:
                                $quantityLf2++;
                                break;
                            case 3:
                                $quantityLf3++;
                                break;
                        }
                    }
                ?>
                    <p class='total-config1-lasers'><?php echo sizeof($config1_lasers); ?></p>
                    <p class='total-config1-lf1'><?php echo $quantityLf1; ?></p>
                    <p class='total-config1-lf2'><?php echo $quantityLf2; ?></p>
                    <p class='total-config1-lf3'><?php echo $quantityLf3; ?></p>
                <?php
                } else {
                ?>
                    <p class='total-config1-lasers'>0</p>
                    <p class='total-config1-lf1'>0</p>
                    <p class='total-config1-lf2'>0</p>
                    <p class='total-config1-lf3'>0</p>
                <?php
                }

                $config1_generators =  explode(",", $equipment["config1_generators"]);
                if ($equipment["config1_generators"] !== "[]") {
                    //Busca en bucle
                    $arrayItem = $equipment["config1_generators"];
                    $arrayItem = str_replace("[", " ", $arrayItem);
                    $arrayItem = str_replace("]", " ", $arrayItem);
                    $arrayItem =  explode(",", $arrayItem);

                    //Speed generators
                    $quantityg3n1010 = 0;
                    $quantityg3n2010 = 0;
                    $quantityg3n3210 = 0;
                    $quantityg3n3310 = 0;
                    $quantityg3n6900 = 0;
                    $quantityg3n7900 = 0;

                    //Shield generators
                    $quantitysg3na01 = 0;
                    $quantitysg3na02 = 0;
                    $quantitysg3na03 = 0;
                    $quantitysg3nb01 = 0;
                    $quantitysg3nb02 = 0;

                    for ($i = 0; $i < sizeof($arrayItem); $i++) {
                        switch ($arrayItem[$i]) {
                            case 1:
                                $quantityg3n1010++;
                                break;
                            case 2:
                                $quantityg3n2010++;
                                break;
                            case 3:
                                $quantityg3n3210++;
                                break;
                            case 4:
                                $quantityg3n3310++;
                                break;
                            case 5:
                                $quantityg3n6900++;
                                break;
                            case 6:
                                $quantityg3n7900++;
                                break;
                            case 7:
                                $quantitysg3na01++;
                                break;
                            case 8:
                                $quantitysg3na02++;
                                break;
                            case 9:
                                $quantitysg3na03++;
                                break;
                            case 10:
                                $quantitysg3nb01++;
                                break;
                            case 11:
                                $quantitysg3nb02++;
                                break;
                        }
                    } ?>
                    <p class='total-config1-generators'><?php echo sizeof($config1_generators); ?></p>
                    <p class='total-config1-g3n1010'><?php echo $quantityg3n1010; ?></p>
                    <p class='total-config1-g3n2010'><?php echo $quantityg3n2010; ?></p>
                    <p class='total-config1-g3n3210'><?php echo $quantityg3n3210; ?></p>
                    <p class='total-config1-g3n3310'><?php echo $quantityg3n3310; ?></p>
                    <p class='total-config1-g3n6900'><?php echo $quantityg3n6900; ?></p>
                    <p class='total-config1-g3n7900'><?php echo $quantityg3n7900; ?></p>
                    <p class='total-config1-sg3na01'><?php echo $quantitysg3na01; ?></p>
                    <p class='total-config1-sg3na02'><?php echo $quantitysg3na02; ?></p>
                    <p class='total-config1-sg3na03'><?php echo $quantitysg3na03; ?></p>
                    <p class='total-config1-sg3nb01'><?php echo $quantitysg3nb01; ?></p>
                    <p class='total-config1-sg3nb02'><?php echo $quantitysg3nb02; ?></p>
                <?php
                } else { ?>
                    <p class='total-config1-generators'>0</p>
                    <p class='total-config1-g3n1010'>0</p>
                    <p class='total-config1-g3n2010'>0</p>
                    <p class='total-config1-g3n3210'>0</p>
                    <p class='total-config1-g3n3310'>0</p>
                    <p class='total-config1-g3n6900'>0</p>
                    <p class='total-config1-g3n7900'>0</p>
                    <p class='total-config1-sg3na01'>0</p>
                    <p class='total-config1-sg3na02'>0</p>
                    <p class='total-config1-sg3na03'>0</p>
                    <p class='total-config1-sg3nb01'>0</p>
                    <p class='total-config1-sg3nb02'>0</p>
                <?php
                }

                $config2_lasers =  explode(",", $equipment["config2_lasers"]);
                if ($equipment["config2_lasers"] !== "[]") {
                    //Busca en bucle
                    $arrayItem = $equipment["config2_lasers"];
                    $arrayItem = str_replace("[", " ", $arrayItem);
                    $arrayItem = str_replace("]", " ", $arrayItem);
                    $arrayItem =  explode(",", $arrayItem);
                    $quantityLf1 = 0;
                    $quantityLf2 = 0;
                    $quantityLf3 = 0;
                    for ($i = 0; $i < sizeof($arrayItem); $i++) {
                        switch ($arrayItem[$i]) {
                            case 1:
                                $quantityLf1++;
                                break;
                            case 2:
                                $quantityLf2++;
                                break;
                            case 3:
                                $quantityLf3++;
                                break;
                        }
                    }
                ?>
                    <p class='total-config2-lasers'><?php echo sizeof($config2_lasers); ?></p>
                    <p class='total-config2-lf1'><?php echo $quantityLf1; ?></p>
                    <p class='total-config2-lf2'><?php echo $quantityLf2; ?></p>
                    <p class='total-config2-lf3'><?php echo $quantityLf3; ?></p>
                <?php
                } else {
                ?>
                    <p class='total-config2-lasers'>0</p>
                    <p class='total-config2-lf1'>0</p>
                    <p class='total-config2-lf2'>0</p>
                    <p class='total-config2-lf3'>0</p>
                <?php
                }

                $config2_generators =  explode(",", $equipment["config2_generators"]);
                if ($equipment["config2_generators"] !== "[]") {
                    //Busca en bucle
                    $arrayItem = $equipment["config2_generators"];
                    $arrayItem = str_replace("[", " ", $arrayItem);
                    $arrayItem = str_replace("]", " ", $arrayItem);
                    $arrayItem =  explode(",", $arrayItem);

                    //Speed generators
                    $quantityg3n1010 = 0;
                    $quantityg3n2010 = 0;
                    $quantityg3n3210 = 0;
                    $quantityg3n3310 = 0;
                    $quantityg3n6900 = 0;
                    $quantityg3n7900 = 0;

                    //Shield generators
                    $quantitysg3na01 = 0;
                    $quantitysg3na02 = 0;
                    $quantitysg3na03 = 0;
                    $quantitysg3nb01 = 0;
                    $quantitysg3nb02 = 0;

                    for ($i = 0; $i < sizeof($arrayItem); $i++) {
                        switch ($arrayItem[$i]) {
                            case 1:
                                $quantityg3n1010++;
                                break;
                            case 2:
                                $quantityg3n2010++;
                                break;
                            case 3:
                                $quantityg3n3210++;
                                break;
                            case 4:
                                $quantityg3n3310++;
                                break;
                            case 5:
                                $quantityg3n6900++;
                                break;
                            case 6:
                                $quantityg3n7900++;
                                break;
                            case 7:
                                $quantitysg3na01++;
                                break;
                            case 8:
                                $quantitysg3na02++;
                                break;
                            case 9:
                                $quantitysg3na03++;
                                break;
                            case 10:
                                $quantitysg3nb01++;
                                break;
                            case 11:
                                $quantitysg3nb02++;
                                break;
                        }
                    } ?>
                    <p class='total-config2-generators'><?php echo sizeof($config2_generators); ?></p>
                    <p class='total-config2-g3n1010'><?php echo $quantityg3n1010; ?></p>
                    <p class='total-config2-g3n2010'><?php echo $quantityg3n2010; ?></p>
                    <p class='total-config2-g3n3210'><?php echo $quantityg3n3210; ?></p>
                    <p class='total-config2-g3n3310'><?php echo $quantityg3n3310; ?></p>
                    <p class='total-config2-g3n6900'><?php echo $quantityg3n6900; ?></p>
                    <p class='total-config2-g3n7900'><?php echo $quantityg3n7900; ?></p>
                    <p class='total-config2-sg3na01'><?php echo $quantitysg3na01; ?></p>
                    <p class='total-config2-sg3na02'><?php echo $quantitysg3na02; ?></p>
                    <p class='total-config2-sg3na03'><?php echo $quantitysg3na03; ?></p>
                    <p class='total-config2-sg3nb01'><?php echo $quantitysg3nb01; ?></p>
                    <p class='total-config2-sg3nb02'><?php echo $quantitysg3nb02; ?></p>
                <?php
                } else { ?>
                    <p class='total-config2-generators'>0</p>
                    <p class='total-config2-g3n1010'>0</p>
                    <p class='total-config2-g3n2010'>0</p>
                    <p class='total-config2-g3n3210'>0</p>
                    <p class='total-config2-g3n3310'>0</p>
                    <p class='total-config2-g3n6900'>0</p>
                    <p class='total-config2-g3n7900'>0</p>
                    <p class='total-config2-sg3na01'>0</p>
                    <p class='total-config2-sg3na02'>0</p>
                    <p class='total-config2-sg3na03'>0</p>
                    <p class='total-config2-sg3nb01'>0</p>
                    <p class='total-config2-sg3nb02'>0</p>
                <?php
                }

                //Lasers
                $lf1Count = json_decode($equipment['items'])->lf1Count;
                echo "<p class='total-inventory-lf1'>" . $lf1Count . "</p>";
                $lf2Count = json_decode($equipment['items'])->lf2Count;
                echo "<p class='total-inventory-lf2'>" . $lf2Count . "</p>";
                $lf3Count = json_decode($equipment['items'])->lf3Count;
                echo "<p class='total-inventory-lf3'>" . $lf3Count . "</p>";
                //Ins't available
                $lf4Count = json_decode($equipment['items'])->lf4Count;
                echo "<p class='total-inventory-lf4'>" . $lf4Count . "</p>";

                //Speed generators
                $g3n1010Count = json_decode($equipment['items'])->g3n1010Count;
                echo "<p class='total-inventory-g3n1010'>" . $g3n1010Count . "</p>";
                $g3n2010Count = json_decode($equipment['items'])->g3n2010Count;
                echo "<p class='total-inventory-g3n2010'>" . $g3n2010Count . "</p>";
                $g3n3210Count = json_decode($equipment['items'])->g3n3210Count;
                echo "<p class='total-inventory-g3n3210'>" . $g3n3210Count . "</p>";
                $g3n3310Count = json_decode($equipment['items'])->g3n3310Count;
                echo "<p class='total-inventory-g3n3310'>" . $g3n3310Count . "</p>";
                $g3n6900Count = json_decode($equipment['items'])->g3n6900Count;
                echo "<p class='total-inventory-g3n6900'>" . $g3n6900Count . "</p>";
                $g3n7900Count = json_decode($equipment['items'])->g3n7900Count;
                echo "<p class='total-inventory-g3n7900'>" . $g3n7900Count . "</p>";

                //Shiled generator
                $sg3na01Count = json_decode($equipment['items'])->sg3na01Count;
                echo "<p class='total-inventory-sg3na01'>" . $sg3na01Count . "</p>";
                $sg3na02Count = json_decode($equipment['items'])->sg3na02Count;
                echo "<p class='total-inventory-sg3na02'>" . $sg3na02Count . "</p>";
                $sg3na03Count = json_decode($equipment['items'])->sg3na03Count;
                echo "<p class='total-inventory-sg3na03'>" . $sg3na03Count . "</p>";
                $sg3nb01Count = json_decode($equipment['items'])->sg3nb01Count;
                echo "<p class='total-inventory-sg3nb01'>" . $sg3nb01Count . "</p>";
                $sg3nb02Count = json_decode($equipment['items'])->sg3nb02Count;
                echo "<p class='total-inventory-sg3nb02'>" . $sg3nb02Count . "</p>";
                //Ships tats
                echo "<p class='ship-lasers'>".$currentShip['lasers']."</p>";
                echo "<p class='ship-generators'>".$currentShip['generators']."</p>";
                //Isn't available by the moment.
                $havocCount = json_decode($equipment['items'])->havocCount;
                $herculesCount = json_decode($equipment['items'])->herculesCount;
                $apis = json_decode($equipment['items'])->apis;
                $zeus = json_decode($equipment['items'])->zeus;
                ?>
            </div>
            <p>Configuration</p>
            <button style="background-color: black; border: none;" onclick="changeConfig(1)" id="config1-button" class="selected-config">1</button>
            <button style="background-color: black; border: none;" onclick="changeConfig(2)" id="config2-button">2</button>
            <br><br>
            <button style="background-color: black; border: none;">SHIP</button>
            <button style="background-color: black; border: none;">VANTS</button>
            <button style="background-color: black; border: none;">P.E.T.</button>
            <br><br>
            <div class="config-1">
                <p>Lasers (1)</p>
                <div class="wrapper2" id="lasers-conf1">
                    <?php
                    for ($i = 1; $i == $currentShip['lasers']; $i++) {
                        echo "<div class='".$i."' >" . $i . "</div> ";
                    }
                    ?>
                </div>
                <p>Generators</p>
                <div class="wrapper2" id="generators-conf1">
                    <?php
                    for ($i = 1; $i == $currentShip['generators']; $i++) {
                        echo "<div class='".$i."' >" . $i . "</div> ";
                    }
                    ?>
                </div>
            </div>
            <br>
            <br>
            <div class="config-2">
                <p>Lasers (2)</p>
                <div class="wrapper2" id="lasers-conf2">
                    <?php
                    for ($i = 1; $i == $currentShip['lasers']; $i++) {
                        echo "<div class='".$i."' >" . $i . "</div> ";
                    }
                    ?>
                </div>
                <p>Generators</p>
                <div class="wrapper2" id="generators-conf2">
                    <?php
                    for ($i = 1; $i == $currentShip['generators']; $i++) {
                        echo "<div class='".$i."' >" . $i . "</div> ";
                    }
                    ?>
                </div>
            </div>

        </div>
        <!-- Vants -->
        <div class="col-4">
            <p>Inventory</p>
            <div class="wrapper3">
                <div class="inventory-item" onclick="selectInventoryItem(0)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/lf-1_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(1)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/mp-1_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(2)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/lf-2_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(3)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/lf-3_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(4)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/g3n-1010_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(5)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/g3n-2010_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(6)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/g3n-3210_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(7)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/g3n-3310_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(8)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/g3n-6900_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(9)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/g3n-7900_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(10)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/sg3n-a01_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(11)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/sg3n-a02_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(12)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/sg3n-a03_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(13)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/sg3n-b01_100x100.png" width="50" class="img-item">
                </div>
                <div class="inventory-item" onclick="selectInventoryItem(14)">
                    <p class="quantity-item">0</p>
                    <img src="/do_img/global/inventory/sg3n-b02_100x100.png" width="50" class="img-item">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="snackbar">Some text some message..</div>
<?php require_once(INCLUDES . 'footer.php'); ?>