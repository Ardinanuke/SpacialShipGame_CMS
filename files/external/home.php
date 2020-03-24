<?php

/*
TO REMOVE.
*/
$base = $mysqli->query('SELECT * FROM server_battlestations WHERE id = 1')->fetch_assoc();
$log_event_jpb = $mysqli->query('SELECT * FROM log_event_jpb  ORDER BY id DESC LIMIT 1')->fetch_assoc();

$clan = $mysqli->query('SELECT * FROM server_clans WHERE id = ' . $base['clanId'])->fetch_assoc();
$jpb_winner = $mysqli->query('SELECT * FROM player_accounts WHERE userId = ' . $log_event_jpb['winner_id'])->fetch_assoc();

require_once(INCLUDES . 'header.php'); ?>

<div class="container">

  <?php require_once(INCLUDES . 'data.php'); ?>

  <div class="col s12">
    <div class="card white-text grey darken-4">
      <div class="row">
        <div class="col s6">
          <div class="padding-15">
            <img src="/img/avatar.png">
            <div class="inline-right">
              <h6><?php echo $player['pilotName']; ?></h6>
              <p>Clan: <?php echo ($player['clanId'] == 0 ? 'Free Agent' : $mysqli->query('SELECT name FROM server_clans WHERE id = ' . $player['clanId'] . '')->fetch_assoc()['name']); ?></p>
              <p>Rank: <img src="<?php echo DOMAIN; ?>img/ranks/rank_<?php echo $player['rankId']; ?>.png"> <?php echo Functions::GetRankName($player['rankId']); ?></p>
              <p>ID: <?php echo $player['userId']; ?></p>
            </div>
          </div>
        </div>
        <div class="col s6">
          <div class="padding-15">
            <p>Level: <?php echo Functions::GetLevel($data->experience); ?></p>
            <p>Company: <img src="/img/companies/logo_<?php echo ($player['factionId'] == 1 ? 'mmo' : ($player['factionId'] == 2 ? 'eic' : 'vru')); ?>.png"></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col s12">
    <div class="row">
      <div class="col s6">
        <div class="padding-15 card white-text grey darken-4">
          <h5 style="font-weight: bold;">Kings of PvP</h5>
          <div class="inline-right">
            <div style="display: flex;">
              <img src="/img/jpb.png" width="75px">
              <?php
              if (isset($clan['name'])) {
              ?>
                <div style="display: block; padding-left: 1em;">
                  <p>Name: <?php echo $clan['name']; ?></p>
                  <p>Tag: <?php echo $clan['tag']; ?></p>
                  <p>Clan Leader: <?php echo $mysqli->query('SELECT pilotName FROM player_accounts where userId = ' . $clan['leaderId'] . '')->fetch_assoc()['pilotName']; ?></p>
                </div>
              <?php
              } else {
              ?>
                <div style="display: block; margin:auto; padding-left: 3em;">
                  <p>Ups right now we don't have Kings of PvP ❤</p>
                </div>
              <?php
              }
              ?>

            </div>
          </div>
        </div>
      </div>
      <div class="col s6">
        <div class="padding-15 card white-text grey darken-4">
          <h5 style="font-weight: bold;">Jackpot Winner</h5>
          <div style="display: flex;">
            <img src="/img/pvp.png" width="75px">
            <?php
            if (isset($jpb_winner['pilotName'])) {
            ?>
              <div style="display: block; padding-left: 1em;">
                <p>Name: <?php echo $jpb_winner['pilotName']; ?></p>
                <p>Rank: <img src="/do_img/global/ranks/rank_<?php echo $jpb_winner['rankId']; ?>.png"></p>
                <p>Top: <?php echo $jpb_winner['rank']; ?></p>
              </div>
            <?php
            } else {
            ?>
              <div style="display: block; margin:auto; padding-left: 3em;">
                <p>Ups right now we don't have Jackpot Winner ❤</p>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contenedor_boxes">
    <div class="box_hall col-12">
      <div class="white-text grey darken-4">
        <div class="padding-15" style="padding-right: 0.5em; height: 722px; overflow: auto;">
          <h5 style="font-weight: bold;">HALL OF FAME</h5>
          <ul class="tabs grey darken-3 tabs-fixed-width tab-demo z-depth-1">
            <li class="tab"><a href="#pilots">PILOTS</a></li>
            <li class="tab"><a href="#clans">CLANS</a></li>
            <li class="tab"><a href="#uba">SEASON</a></li>
          </ul>
          <div id="pilots">
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
                    <td><?php echo $value['pilotName']; ?></td>
                    <td><img src="/img/companies/logo_<?php echo ($value['factionId'] == 1 ? 'mmo' : ($value['factionId'] == 2 ? 'eic' : 'vru')); ?>_mini.png"></td>
                    <td><?php echo $value['rank']; ?></td>
                    <td><?php echo $value['rankPoints']; ?></td>
                  </tr>
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
          <div id="clans">
            <table class="striped highlight">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Rank</th>
                  <th>Value</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($mysqli->query('SELECT * FROM server_clans WHERE rank > 0 ORDER BY rank ASC LIMIT 9') as $value) { ?>
                  <tr>
                    <td><a href="<?php echo DOMAIN; ?>clan/clan-details/<?php echo $value['id'] ?>">[<?php echo $value['tag']; ?>] <?php echo $value['name']; ?></a></td>
                    <td><?php echo $value['rank']; ?></td>
                    <td><?php echo $value['rankPoints']; ?></td>
                  </tr>
                <?php } ?>
                <?php if (isset($clan) && $clan['rank'] > 9) { ?>
                  <tr>
                    <td>[<?php echo $clan['tag']; ?>] <?php echo $clan['name']; ?></td>
                    <td><?php echo $clan['rank']; ?></td>
                    <td><?php echo $clan['rankPoints']; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <div id="uba">
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
                <?php foreach ($mysqli->query('SELECT * FROM player_accounts WHERE rankId != 21 AND rank > 0 ORDER BY warPoints DESC LIMIT 9') as $value) { ?>
                  <tr>
                    <td><?php echo $value['pilotName']; ?></td>
                    <td><img src="/img/companies/logo_<?php echo ($value['factionId'] == 1 ? 'mmo' : ($value['factionId'] == 2 ? 'eic' : 'vru')); ?>_mini.png"></td>
                    <td><?php echo $value['warRank']; ?></td>
                    <td><?php echo $value['warPoints']; ?></td>
                  </tr>
                <?php } ?>
                <?php if ($player['rank'] > 9) { ?>
                  <tr>
                    <td><?php echo $player['pilotName']; ?></td>
                    <td><img src="/img/companies/logo_<?php echo ($player['factionId'] == 1 ? 'mmo' : ($player['factionId'] == 2 ? 'eic' : 'vru')); ?>_mini.png"></td>
                    <td><?php echo $player['warRank']; ?></td>
                    <td><?php echo $player['warPoints']; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="box_news white-text grey darken-4 col-12">
      <h5 style="font-weight: bold;">NEWS</h5>
      <div class="w3-content w3-display-container">
        <?php
        foreach ($mysqli->query('SELECT * FROM news ORDER by id desc') as $value) { ?>
          <div class="mySlides" style="height: 580px; overflow: auto;">
            <?php
            echo $value['html_code'];
            ?>
          </div>
        <?php
        } ?>
        <button class="w3-button w3-black w3-display-left" style="margin-top: 270px;"  onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right"style="margin-top: 270px;"  onclick="plusDivs(1)">&#10095;</button>
        
      </div>

      <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {
            slideIndex = 1
          }
          if (n < 1) {
            slideIndex = x.length
          }
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          x[slideIndex - 1].style.display = "block";
        }

        setInterval(() => {
          plusDivs(1)
        }, 8000);
      </script>
    </div>
    <div class="box_events white-text grey darken-4 col-12">
      <h5 style="font-weight: bold;">UPCOMING EVENTS</h5>
      <div style="text-align:center;">
        <h4><a style="text-decoration:none;"><br />Server time</a></h4> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=America%2FMexico_City" width="100%" height="90" frameborder="0" seamless></iframe>
      </div>
      <div class="container_events">

        <?php
        $count = 0;
        foreach ($mysqli->query('SELECT * FROM event ORDER by id asc') as $value) {
          echo '<div class="event">' . $value['html_code'];
          if ($value['active'] == 1) {
            echo '<br> <form action="/event" method="post">
                    <input type="text" name="code" id="code" value="' . $value['event_code'] . '" style="position: absolute; visibility: hidden;">
                    <button class="btn green darken-1 col s12">Claim Event Coins</button>
                  </form>';
          }
          echo '</div>';

          $count++;
        }

        if (!$count) {
          echo "<div style='text-align:center;'> <br><br><strong style='text-align:center;'>Upps.. right now we don't have upcoming event. <br> <br> <span> With ❤ DeathSpace Team</span></strong></div>";
        }
        ?>

      </div>
    </div>
  </div>
  <br>
  <br>
  <?php
  if (!isset($_COOKIE['jquery_popup'])) {
    setcookie("jquery_popup", 'sessionexists', time() + 3600); ?>
    <!-- The Modal -->
    <div id="id03" class="w3-modal" style="height: 100%; display: block;">
      <div class="w3-modal-content modal_modification" style="height: 90% !important;">
        <div class="w3-container">
          <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-display-topright">&times;</span>
          <div class="center">
            <img src="img/season1.png" width="100%">
            <p style="font-weight: bold; color: gold; font-size: 25px;">THIS PACK INCLUDE</p>
            <p style="font-weight: bold;  font-size: 15px;">Exclusive design "Goliath Orion", One month premium, Exclusive title: "The Hunter" & 1.000.000 U. </p>
            <br>
            <a class="btn green darken-4 col s12" href="premium" style="width: 400px !important; font-size: 30px; height: 80px !important; font-weight: bold; padding-top: 25px !important;">Buy now</a>
            <br><br>
            <div class="countdown2">
              <p class="timer2">
                <strong>Next season: </strong>
                <span id="days"></span> Day(s)
                <span id="hours"></span> Hour(s)
                <span id="minutes"></span> Minute(s)
                <span id="seconds"></span> Second(s)
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
    <script>
      function countdown(endDate) {
        let days, hours, minutes, seconds;

        endDate = new Date(endDate).getTime();

        if (isNaN(endDate)) {
          return;
        }

        setInterval(calculate, 1000);

        function calculate() {

          let startDate = new Date().getTime(); /* we only need change the start date */

          let timeRemaining = parseInt((endDate - startDate) / 1000);


          if (timeRemaining >= 0) {
            days = parseInt(timeRemaining / 86400);
            timeRemaining = (timeRemaining % 86400);

            hours = parseInt(timeRemaining / 3600);
            timeRemaining = (timeRemaining % 3600);

            minutes = parseInt(timeRemaining / 60);
            timeRemaining = (timeRemaining % 60);

            seconds = parseInt(timeRemaining);
            document.getElementById("days").innerHTML = days < 10 ? "0" + days : days;
            document.getElementById("hours").innerHTML = hours < 10 ? "0" + hours : hours;
            document.getElementById("minutes").innerHTML = minutes < 10 ? "0" + minutes : minutes;
            document.getElementById("seconds").innerHTML = seconds < 10 ? "0" + seconds : seconds;
          } else {
            return;
          }
        }
      }

      (function() {
        /* mm / dd / yy */
        countdown('04/15/2020 07:00:00 AM');
      }());
    </script>
  <?php
    //Add code to display popup here
  }
  ?>
<?php require_once(INCLUDES . 'footer.php'); ?>