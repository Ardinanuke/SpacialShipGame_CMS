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
        <div class="col-4 container-content-left">
            <div class="black-box-info">
                <br>
                <p class="box-info-titulo">PILOT BIO</p>
                <div class="container-pilot-bio">
                    <div class="pilot-bio-images">
                        <img src="https://darkorbit-22.bpsecure.com/do_img/global/avatar.png" width="55">
                        <br>
                        <img src="/img/companies/logo_<?php echo ($player['factionId'] == 1 ? 'mmo' : ($player['factionId'] == 2 ? 'eic' : 'vru')); ?>.png" width="60">
                        <br>
                    </div>
                    <div class="pilot-bio-info">
                        <p>Usuario: <?php echo $player['pilotName']; ?></p>
                        <p>Clan: <?php echo ($player['clanId'] == 0 ? 'Free Agent' : $mysqli->query('SELECT name FROM server_clans WHERE id = ' . $player['clanId'] . '')->fetch_assoc()['name']); ?></p>
                        <p>Rank: <img src="<?php echo DOMAIN; ?>img/ranks/rank_<?php echo $player['rankId']; ?>.png"> <?php echo Functions::GetRankName($player['rankId']); ?></p>
                    </div>
                </div>
            </div>
            <br>
            <div class="container-buttons-hall-of-fame">
                <button>GLOBAL</button>
                <button>SEASON</button>
                <button>UBA</button>
                <button>CLAN</button>
            </div>

            <div class="black-box-info">
                <br>
                <p class="box-info-titulo">HALL OF FAME</p>
                <div class="container-hall-of-fame">
                    <table class="striped highlight">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Rank</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($mysqli->query('SELECT * FROM player_accounts WHERE rankId != 21 AND rank > 0 ORDER BY rank ASC LIMIT 9') as $value) { ?>
                                <tr>
                                    <td><?php

                                        $out = strlen($value['pilotName']) > 10 ? substr($value['pilotName'], 0, 10) . "..." : $value['pilotName'];;

                                        echo $out; ?></td>
                                    <td><img src="/img/companies/logo_<?php echo ($value['factionId'] == 1 ? 'mmo' : ($value['factionId'] == 2 ? 'eic' : 'vru')); ?>_mini.png"></td>
                                    <td><?php echo $value['rank']; ?></td>
                                    <td><?php echo $value['rankPoints']; ?></td>
                                </tr>
                                <br>
                            <?php } ?>

                            <?php if ($player['rank'] > 9) { ?>
                                <tr>
                                    <td><?php echo $player['pilotName']; ?></td>
                                    <td><img src="/img/companies/logo_<?php echo ($player['factionId'] == 1 ? 'mmo' : ($player['factionId'] == 2 ? 'eic' : 'vru')); ?>_mini.png"></td>
                                    <td><?php echo $player['rank']; ?></td>
                                    <td><?php echo $player['rankPoints']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <button class="button-see-all">See more...</button>
        </div>
        <div class="col-4 container-content-center">
            <div class="black-box-info">
                <br>
                <p class="box-info-titulo">NEWS</p>
                <div class="container-news">
                    <img src="https://www.solidbackgrounds.com/images/2560x1600/2560x1600-dark-gray-solid-color-background.jpg" width="250px" height="150px">
                </div>
                <div class="container-buttons-content">
                    <h4>DeathSpaces 2.0 its here!</h4>
                    <p>
                        We implemented many new and better changes throughout the server to make it playable! our servers will stay online 24/7 without interruptions!
                        <br>
                        <br>
                        - DeathSpaces developers team.
                    </p>
                </div>

                <br>
                <div class="container-buttons-news">
                    <button>
                        <</button> <button>>
                    </button>
                </div>
                <br>
            </div>
        </div>
        <div class="col-4 container-content-right">
            <div class="black-box-info">
                <br>
                <p class="box-info-titulo">SERVER TIME</p>
                <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=America%2FMexico_City" width="100%" height="90" frameborder="0" seamless></iframe>
            </div>
            <br><br>
            <div class="black-box-info info-events">
                <br>
                <p class="box-info-titulo">EVENTS</p>
                <div class="event-container">
                    <p class="event-title">Event name</p>
                    <p>Tue, 22. Dec 2020</p>
                    <p>03:00:00 p.m. - 04:00:00 p.m.</p>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<?php require_once(INCLUDES . 'footer.php'); ?>