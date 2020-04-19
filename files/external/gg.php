<?php require_once(INCLUDES . 'header.php'); ?>

<div id="main">
  <div class="container">
    <div class="row">
      <div class="card white-text grey darken-4 padding-15">
        <div>
          <button class="btn grey darken-2" style="width: 140px">Alpha</button> <br><br>
          <button class="btn grey darken-2" style="width: 140px">Beta</button> <br><br>
          <button class="btn grey darken-2" style="width: 140px">Gamma</button> <br> <br>
          <button class="btn grey darken-2" style="width: 140px">Delta</button> <br> <br>
          <button class="btn grey darken-2" style="width: 140px">Zeta</button> <br> <br>
          <button class="btn grey darken-2" style="width: 140px">Hades</button> <br> <br>
        </div>
        <?php
        $result = $mysqli->query('SELECT * FROM player_galaxygates WHERE userId=' . $player['userId'] . " AND gateId=1");

        if (mysqli_num_rows($result)) {
          $gg = $result->fetch_assoc();
        ?>
          <div style="background: black; padding: 10px">
            <p>Alpha Gate</p>
            <img src="<?php echo DOMAIN; ?>img/alpha.png" style="display:block;margin:auto;">
            <div id="contenedor_gg1">
              <p id="piezes1">Piezes: <?php echo ($gg['parts'] >= 34) ? 34 : $gg['parts']; ?>/34</p>
              <p>lives: <?php echo $gg['lives']; ?></p>
              <button id="botonspin1" onclick="spin1()" class="btn grey darken-1" <?php echo ($gg['parts'] >= 34)? "style='display:none;'" : "style='display:initial;'" ; ?>>100 Energy (200.000 U.)</button>

              <?php if ($gg['parts'] >= 34) {
              ?>
                <button onclick="build1()" class="btn grey darken-1" id="launch">BUILD</button>
              <?php
              } ?>
            </div>
          </div>
        <?php
        } else { ?>
          <div style="background: black; padding: 10px">
            <p>Alpha Gate</p>
            <img src="<?php echo DOMAIN; ?>img/alpha.png" style="display:block;margin:auto;">
            <div id="contenedor_gg1">
              <p id="piezes1">Piezes: 0/34</p>
              <p>lives: 0</p>
              <button id="botonspin1"  onclick="spin1()" class="btn grey darken-1">100 Energy (200.000 U.) </button>
            </div>
          </div>
        <?php
        }
        ?>
        <div style="background: black; padding: 10px">
          <p>Beta Gate</p>
          <img src="<?php echo DOMAIN; ?>img/beta.png" style="display:block;margin:auto;">
          <div  >
            <p>Piezes: 0/48</p>
            <p>lives: 3</p>
            <button onclick="spin2()" class="btn grey darken-1">100 Energy (200.000 U.) </button>
          </div>
        </div>

      </div>
    </div>
  </div>
  <script>
    let piezes1 = document.getElementById("piezes1");
    let botonspin1 = document.getElementById("botonspin1");
    let contenedor1 = document.getElementById("contenedor_gg1");
    let switch1 = true;

    function spin1() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=1&action=galaxygate',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            if (json.piezes >= 34) {
              json.piezes = 34;
              if (switch1) {
                botonspin1.style.display = "none";
                contenedor1.innerHTML += '<button onclick="build1()" class="btn grey darken-1" id="launch">BUILD</button>';
                switch1 = false;
              }
            }
            piezes1.innerHTML = `Piezes: ${json.piezes}/34`;
            M.toast({
              html: html
            });
          }
        }
      });
    }
    
    function build1(){

    }
  </script>
  <?php require_once(INCLUDES . 'footer.php'); ?>