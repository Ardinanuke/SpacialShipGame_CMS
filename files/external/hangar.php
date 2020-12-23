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
        <div style="padding: 20px;">
            <div class="wrapper">
                <button onclick="changeShip(1)">
                    <div class="ship-wrapper">
                        <div class="absolute-container">
                            <div class="ship-name">
                                Phoenix
                            </div>
                            <div class="ship-selected">
                                o
                            </div>
                        </div>
                        <img src="https://www.solidbackgrounds.com/images/2560x1600/2560x1600-dark-gray-solid-color-background.jpg" width="110px" height="110px">
                    </div>
                </button>
                <button onclick="changeShip(2)">
                    <div class="ship-wrapper">
                        <div class="absolute-container">
                            <div class="ship-name">
                                Piranha
                            </div>
                            <div class="ship-selected">
                                o
                            </div>
                        </div>
                        <img src="https://www.solidbackgrounds.com/images/2560x1600/2560x1600-dark-gray-solid-color-background.jpg" width="110px" height="110px">
                    </div>
                </button>
                <button onclick="changeShip(3)">
                    <div class="ship-wrapper">
                        <div class="absolute-container">
                            <div class="ship-name">
                                Nostromo
                            </div>
                            <div class="ship-selected">
                                o
                            </div>
                        </div>
                        <img src="https://www.solidbackgrounds.com/images/2560x1600/2560x1600-dark-gray-solid-color-background.jpg" width="110px" height="110px">
                    </div>
                </button>
                <button onclick="changeShip(4)">
                    <div class="ship-wrapper">
                        <div class="absolute-container">
                            <div class="ship-name">
                                Bigboy
                            </div>
                            <div class="ship-selected">
                                o
                            </div>
                        </div>
                        <img src="https://www.solidbackgrounds.com/images/2560x1600/2560x1600-dark-gray-solid-color-background.jpg" width="110px" height="110px">
                    </div>
                </button>
                <button onclick="changeShip(5)">
                    <div class="ship-wrapper">
                        <div class="absolute-container">
                            <div class="ship-name">
                                Leonov
                            </div>
                            <div class="ship-selected">
                                o
                            </div>
                        </div>
                        <img src="https://www.solidbackgrounds.com/images/2560x1600/2560x1600-dark-gray-solid-color-background.jpg" width="110px" height="110px">
                    </div>
                </button>
                <button onclick="changeShip(6)">
                    <div class="ship-wrapper">
                        <div class="absolute-container">
                            <div class="ship-name">
                                Vengeance
                            </div>
                            <div class="ship-selected">
                                o
                            </div>
                        </div>
                        <img src="https://www.solidbackgrounds.com/images/2560x1600/2560x1600-dark-gray-solid-color-background.jpg" width="110px" height="110px">
                    </div>
                </button>
                <button onclick="changeShip(7)">
                    <div class="ship-wrapper">
                        <div class="absolute-container">
                            <div class="ship-name">
                                Goliath
                            </div>
                            <div class="ship-selected">
                                o
                            </div>
                        </div>
                        <img src="https://www.solidbackgrounds.com/images/2560x1600/2560x1600-dark-gray-solid-color-background.jpg" width="110px" height="110px">
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>

<div id="snackbar">Some text some message..</div>

<?php require_once(INCLUDES . 'footer.php'); ?>