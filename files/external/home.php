<?php require_once(INCLUDES . 'header.php'); ?>

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

  <div class="contenedor_boxes">
    <div class="box_hall col-12">
      <div class="white-text grey darken-4">
        <div class="padding-15">
          <h5 style="font-weight: bold;">HALL OF FAME</h5>
          <ul class="tabs grey darken-3 tabs-fixed-width tab-demo z-depth-1">
            <li class="tab"><a href="#pilots">PILOTS</a></li>
            <li class="tab"><a href="#clans">CLANS</a></li>
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
        </div>
      </div>
    </div>
    <div class="box_news white-text grey darken-4 col-12">
      <h5 style="font-weight: bold;">NEWS</h5>
      <div class="w3-content w3-display-container">
        <?php
        foreach ($mysqli->query('SELECT * FROM news ORDER by id desc') as $value) { ?>
          <div class="mySlides">
            <?php
            echo $value['html_code'];
            ?>
          </div>
        <?php
        } ?>
        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
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
          echo '<div class="event">'.$value['html_code'].'</div>';
          $count++;
        }

        if(!$count){
          echo "<div style='text-align:center;'> <br><br><strong style='text-align:center;'>Upps.. right now we don't have upcoming event. <br> <br> <span> With ❤ DeathSpace Team</span></strong></div>";
        }
        ?>
      </div>
    </div>
  </div>
  <br>
  <br>
</div>


<?php require_once(INCLUDES . 'footer.php'); ?>