<?php require_once(INCLUDES . 'header.php'); ?>

<div id="main">
  <div class="container">
    <?php require_once(INCLUDES . 'data.php'); ?>

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

              <button id="botonspin1" onclick="spin1()" class="btn grey darken-1" <?php echo ($gg['parts'] >= 34) ? "style='display:none;'" : "style='display:initial;'"; ?>>100 Energy (200.000 U.)</button>

              <?php if ($gg['parts'] >= 34 && $gg['prepared'] != 1) {
              ?>
                <button onclick="build1()" class="btn grey darken-1" id="launch1">BUILD</button>
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
              <p>lives: 3</p>
              <button id="botonspin1" onclick="spin1()" class="btn grey darken-1">100 Energy (200.000 U.) </button>
            </div>
          </div>
        <?php
        }
        ?>


        <?php
        $result = $mysqli->query('SELECT * FROM player_galaxygates WHERE userId=' . $player['userId'] . " AND gateId=2");
        if (mysqli_num_rows($result)) {
          $gg = $result->fetch_assoc();
        ?>
          <div style="background: black; padding: 10px">
            <p>Beta Gate</p>
            <img src="<?php echo DOMAIN; ?>img/beta.png" style="display:block;margin:auto;">
            <div id="contenedor_gg2">
              <p id="piezes2">Piezes: <?php echo ($gg['parts'] >= 48) ? 48 : $gg['parts']; ?>/48</p>

              <p>lives: <?php echo $gg['lives']; ?></p>

              <button id="botonspin2" onclick="spin2()" class="btn grey darken-1" <?php echo ($gg['parts'] >= 48) ? "style='display:none;'" : "style='display:initial;'"; ?>>100 Energy (200.000 U.)</button>

              <?php if ($gg['parts'] >= 48 && $gg['prepared'] != 1) {
              ?>
                <button onclick="build2()" class="btn grey darken-1" id="launch2">BUILD</button>
              <?php
              } ?>
            </div>
          </div>
        <?php
        } else { ?>
          <div style="background: black; padding: 10px">
            <p>Alpha Gate</p>
            <img src="<?php echo DOMAIN; ?>img/beta.png" style="display:block;margin:auto;">
            <div id="contenedor_gg2">
              <p id="piezes2">Piezes: 0/48</p>
              <p>lives: 3</p>
              <button id="botonspin2" onclick="spin2()" class="btn grey darken-1">100 Energy (200.000 U.) </button>
            </div>
          </div>
        <?php
        }
        ?>

        <?php
        $result = $mysqli->query('SELECT * FROM player_galaxygates WHERE userId=' . $player['userId'] . " AND gateId=3");
        if (mysqli_num_rows($result)) {
          $gg = $result->fetch_assoc();
        ?>
          <div style="background: black; padding: 10px">
            <p>Gamma Gate</p>
            <img src="<?php echo DOMAIN; ?>img/gamma.png" style="display:block;margin:auto;">
            <div id="contenedor_gg3">
              <p id="piezes3">Piezes: <?php echo ($gg['parts'] >= 82) ? 82 : $gg['parts']; ?>/82</p>

              <p>lives: <?php echo $gg['lives']; ?></p>

              <button id="botonspin3" onclick="spin3()" class="btn grey darken-1" <?php echo ($gg['parts'] >= 82) ? "style='display:none;'" : "style='display:initial;'"; ?>>100 Energy (200.000 U.)</button>

              <?php if ($gg['parts'] >= 82 && $gg['prepared'] != 1) {
              ?>
                <button onclick="build3()" class="btn grey darken-1" id="launch3">BUILD</button>
              <?php
              } ?>
            </div>
          </div>
        <?php
        } else { ?>
          <div style="background: black; padding: 10px">
            <p>Gamma Gate</p>
            <img src="<?php echo DOMAIN; ?>img/gamma.png" style="display:block;margin:auto;">
            <div id="contenedor_gg3">
              <p id="piezes3">Piezes: 0/82</p>
              <p>lives: 3</p>
              <button id="botonspin3" onclick="spin3()" class="btn grey darken-1">100 Energy (200.000 U.) </button>
            </div>
          </div>
        <?php
        }
        ?>



<?php
        $result = $mysqli->query('SELECT * FROM player_galaxygates WHERE userId=' . $player['userId'] . " AND gateId=3");
        if (mysqli_num_rows($result)) {
          $gg = $result->fetch_assoc();
        ?>
          <div style="background: black; padding: 10px">
            <p>Delta Gate</p>
            <img src="<?php echo DOMAIN; ?>img/delta.png" style="display:block;margin:auto;">
            <div id="contenedor_gg3">
              <p id="piezes3">Piezes: <?php echo ($gg['parts'] >= 82) ? 82 : $gg['parts']; ?>/82</p>

              <p>lives: <?php echo $gg['lives']; ?></p>

              <button id="botonspin3" onclick="spin3()" class="btn grey darken-1" <?php echo ($gg['parts'] >= 82) ? "style='display:none;'" : "style='display:initial;'"; ?>>100 Energy (200.000 U.)</button>

              <?php if ($gg['parts'] >= 82 && $gg['prepared'] != 1) {
              ?>
                <button onclick="build3()" class="btn grey darken-1" id="launch3">BUILD</button>
              <?php
              } ?>
            </div>
          </div>
        <?php
        } else { ?>
          <div style="background: black; padding: 10px">
            <p>Delta Gate</p>
            <img src="<?php echo DOMAIN; ?>img/delta.png" style="display:block;margin:auto;">
            <div id="contenedor_gg3">
              <p id="piezes3">Piezes: 0/82</p>
              <p>lives: 3</p>
              <button id="botonspin3" onclick="spin3()" class="btn grey darken-1">100 Energy (200.000 U.) </button>
            </div>
          </div>
        <?php
        }
        ?>


      </div>
    </div>
  </div>
  <script>
    let piezes1 = document.getElementById("piezes1");
    let botonspin1 = document.getElementById("botonspin1");
    let contenedor1 = document.getElementById("contenedor_gg1");
    let switch1 = true;

    let piezes2 = document.getElementById("piezes2");
    let botonspin2 = document.getElementById("botonspin2");
    let contenedor2 = document.getElementById("contenedor_gg2");
    let switch2 = true;

    let piezes3 = document.getElementById("piezes3");
    let botonspin3 = document.getElementById("botonspin3");
    let contenedor3 = document.getElementById("contenedor_gg3");
    let switch3 = true;

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
                contenedor1.innerHTML += '<button onclick="build1()" class="btn grey darken-1" id="launch1">BUILD</button>';
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

    function spin2() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=2&action=galaxygate',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            if (json.piezes >= 48) {
              json.piezes = 48;
              if (switch2) {
                botonspin2.style.display = "none";
                contenedor2.innerHTML += '<button onclick="build2()" class="btn grey darken-1" id="launch2">BUILD</button>';
                switch2 = false;
              }
            }
            piezes2.innerHTML = `Piezes: ${json.piezes}/48`;
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function spin3() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=3&action=galaxygate',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            if (json.piezes >= 82) {
              json.piezes = 82;
              if (switch3) {
                botonspin3.style.display = "none";
                contenedor3.innerHTML += '<button onclick="build3()" class="btn grey darken-1" id="launch3">BUILD</button>';
                switch3 = false;
              }
            }
            piezes3.innerHTML = `Piezes: ${json.piezes}/82`;
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function build1() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=1&action=buildergg',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            let launch1 = document.getElementById("launch1");
            launch1.style.display = "none";
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function build2() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=2&action=buildergg',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            let launch2 = document.getElementById("launch2");
            launch2.style.display = "none";
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function build3() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=3&action=buildergg',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            let launch3 = document.getElementById("launch3");
            launch3.style.display = "none";
            M.toast({
              html: html
            });
          }
        }
      });
    }
  </script>
  <?php require_once(INCLUDES . 'footer.php'); ?>