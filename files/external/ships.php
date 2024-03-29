<?php require_once(INCLUDES . 'header.php'); ?>

<div id="main">
  <div class="container">
    <div class="row">
      <div class="card  white-text grey darken-4 padding-15">
        <h5 style="font-weight: bold;">Ships</h5>
        <div class=" center w3-content w3-display-container">
          <div class="mySlides">


            <img src="<?php echo DOMAIN; ?>do_img/global/items/goliath.gif" alt="" srcset="">
            <h3><strong>Goliath</strong></h3>
            <br><br>
            <button class="custom_choose i-0">Choose</button>
          </div>
          <?php
          $player = Functions::GetPlayer();
          $items = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $player['userId'] . '')->fetch_assoc()['items']);
          foreach ($items->ships as $ships) { ?>
              <?php
              switch ($ships) {
                case 8:
                  echo '<div class="mySlides"><img src="' . DOMAIN . 'do_img/global/items/vengeance.gif" alt="" srcset="">';
                  echo "<h3><strong>Vengeance</strong></h3><br><br>";
                  echo '<button class="custom_choose i-1">Choose</button> </div>';
                  break;
                case 245:
                  echo '<div class="mySlides"><img src="' . DOMAIN . 'do_img/global/items/cyborg.gif" alt="" srcset="">';
                  echo "<h3><strong>Cyborg</strong></h3><br><br>";
                  echo '<button class="custom_choose i-2">Choose</button> </div>';
                  break;
                case 246:
                  echo '<div class="mySlides"><img src="' . DOMAIN . 'do_img/global/items/hammerclaw.gif" alt="" srcset="">';
                  echo "<h3><strong>Hammerclaw</strong></h3><br><br>";
                  echo '<button class="custom_choose i-3">Choose</button> </div>';
                  break;
                case 49:
                  echo '<div class="mySlides"><img src="' . DOMAIN . 'do_img/global/items/aegis.gif" alt="" srcset="">';
                  echo "<h3><strong>Aegis</strong></h3><br><br>";
                  echo '<button class="custom_choose i-4">Choose</button> </div>';
                  break;
                case 69:
                  echo '<div class="mySlides"><br><br><img src="' . DOMAIN . 'do_img/global/items/citadel.gif" alt="" srcset="">';
                  echo "<h3><strong>Citadel</strong></h3><br><br>";
                  echo '<button class="custom_choose i-5">Choose</button> </div>';
                  break;
                case 70:
                  echo '<div class="mySlides"><br><br><br><img src="' . DOMAIN . 'do_img/global/items/spearhead.gif" alt="" srcset="">';
                  echo "<h3><strong>Spearhead</strong></h3><br><br>";
                  echo '<button class="custom_choose i-6">Choose</button> </div>';
                  break;
              }
              ?>
          <?php
          }
          ?>


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
        </script>
      </div>
    </div>
  </div>
</div>

<?php require_once(INCLUDES . 'footer.php'); ?>