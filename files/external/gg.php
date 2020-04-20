<?php require_once(INCLUDES . 'header.php'); ?>

<div id="main">
  <div class="container">
    <?php require_once(INCLUDES . 'data.php'); ?>

    <div class="row">
      <div class="card white-text grey darken-4 padding-15" style="display: flex;">

        <div style="margin:auto;">
          <button class="btn grey darken-2" style="width: 140px" onclick="changeGate(1)">Alpha</button> <br><br>
          <button class="btn grey darken-2" style="width: 140px" onclick="changeGate(2)">Beta</button> <br><br>
          <button class="btn grey darken-2" style="width: 140px" onclick="changeGate(3)">Gamma</button> <br> <br>
          <button class="btn grey darken-2" style="width: 140px" onclick="changeGate(4)">Delta</button> <br> <br>
          <button class="btn grey darken-2" style="width: 140px" onclick="changeGate(5)">Epsilon</button> <br> <br>
          <button class="btn grey darken-2" style="width: 140px" onclick="changeGate(6)">Zeta</button> <br> <br>
          <!-- <button class="btn grey darken-2" style="width: 140px">Kronos</button> <br> <br> -->
          <!-- <button class="btn grey darken-2" style="width: 140px">Hades</button> <br> <br> -->
        </div>

        <?php
        $result = $mysqli->query('SELECT * FROM player_galaxygates WHERE userId=' . $player['userId'] . " AND gateId=1");
        if (mysqli_num_rows($result)) {
          $gg = $result->fetch_assoc();
        ?>
          <div style="background: black; padding: 10px; margin:auto; width: 70%; height: 500px;" id="gg1">
            <p>Alpha Gate</p>
            <img src="<?php echo DOMAIN; ?>img/alpha.png" style="display:block;margin:auto;">
            <div id="contenedor_gg1">
              <p id="piezes1">Parts: <?php echo ($gg['parts'] >= 34) ? 34 : $gg['parts']; ?>/34</p>

              <p>lives: <?php echo $gg['lives']; ?></p>

              <button id="botonspin1" onclick="spin1()" class="btn grey darken-1" <?php echo ($gg['parts'] >= 34) ? "style='display:none;'" : "style='display:initial;'"; ?>>100 Energy (150.000 U.)</button>

              <?php if ($gg['parts'] >= 34 && $gg['prepared'] != 1) {
              ?>
                <button onclick="build1()" class="btn grey darken-1" id="launch1">BUILD</button>
              <?php
              } ?>
            </div>
          </div>
        <?php
        } else { ?>
          <div style="background: black; padding: 10px; margin:auto; width: 70%; height: 500px;" id="gg1">
            <p>Alpha Gate</p>
            <img src="<?php echo DOMAIN; ?>img/alpha.png" style="display:block;margin:auto;">
            <div id="contenedor_gg1">
              <p id="piezes1">Parts: 0/34</p>
              <p>lives: 3</p>
              <button id="botonspin1" onclick="spin1()" class="btn grey darken-1">100 Energy (150.000 U.) </button>
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
          <div style="background: black; padding: 10px;margin:auto; width: 70%; display: none;height: 500px;" id="gg2">
            <p>Beta Gate</p>
            <img src="<?php echo DOMAIN; ?>img/beta.png" style="display:block;margin:auto;">
            <div id="contenedor_gg2">
              <p id="piezes2">Parts: <?php echo ($gg['parts'] >= 48) ? 48 : $gg['parts']; ?>/48</p>

              <p>lives: <?php echo $gg['lives']; ?></p>

              <button id="botonspin2" onclick="spin2()" class="btn grey darken-1" <?php echo ($gg['parts'] >= 48) ? "style='display:none;'" : "style='display:initial;'"; ?>>100 Energy (150.000 U.)</button>

              <?php if ($gg['parts'] >= 48 && $gg['prepared'] != 1) {
              ?>
                <button onclick="build2()" class="btn grey darken-1" id="launch2">BUILD</button>
              <?php
              } ?>
            </div>
          </div>
        <?php
        } else { ?>
          <div style="background: black; padding: 10px; margin:auto; width: 70%;display: none;height: 500px;" id="gg2">
            <p>Alpha Gate</p>
            <img src="<?php echo DOMAIN; ?>img/beta.png" style="display:block;margin:auto;">
            <div id="contenedor_gg2">
              <p id="piezes2">Parts: 0/48</p>
              <p>lives: 3</p>
              <button id="botonspin2" onclick="spin2()" class="btn grey darken-1">100 Energy (150.000 U.) </button>
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
          <div style="background: black; padding: 10px;margin:auto; width: 70%; display: none;height: 500px;" id="gg3">
            <p>Gamma Gate</p>
            <img src="<?php echo DOMAIN; ?>img/gamma.png" style="display:block;margin:auto;">
            <div id="contenedor_gg3">
              <p id="piezes3">Parts: <?php echo ($gg['parts'] >= 82) ? 82 : $gg['parts']; ?>/82</p>

              <p>lives: <?php echo $gg['lives']; ?></p>

              <button id="botonspin3" onclick="spin3()" class="btn grey darken-1" <?php echo ($gg['parts'] >= 82) ? "style='display:none;'" : "style='display:initial;'"; ?>>100 Energy (150.000 U.)</button>

              <?php if ($gg['parts'] >= 82 && $gg['prepared'] != 1) {
              ?>
                <button onclick="build3()" class="btn grey darken-1" id="launch3">BUILD</button>
              <?php
              } ?>
            </div>
          </div>
        <?php
        } else { ?>
          <div style="background: black; padding: 10px;margin:auto; width: 70%; display: none;height: 500px;" id="gg3">
            <p>Gamma Gate</p>
            <img src="<?php echo DOMAIN; ?>img/gamma.png" style="display:block;margin:auto;">
            <div id="contenedor_gg3">
              <p id="piezes3">Parts: 0/82</p>
              <p>lives: 3</p>
              <button id="botonspin3" onclick="spin3()" class="btn grey darken-1">100 Energy (150.000 U.) </button>
            </div>
          </div>
        <?php
        }
        ?>



        <?php
        $result = $mysqli->query('SELECT * FROM player_galaxygates WHERE userId=' . $player['userId'] . " AND gateId=4");
        if (mysqli_num_rows($result)) {
          $gg = $result->fetch_assoc();
        ?>
          <div style="background: black; padding: 10px; margin:auto; width: 70%;display: none;height: 500px;" id="gg4">
            <p>Delta Gate</p>
            <img src="<?php echo DOMAIN; ?>img/delta.png" style="display:block;margin:auto;">
            <div id="contenedor_gg4">
              <p id="piezes4">Parts: <?php echo ($gg['parts'] >= 128) ? 128 : $gg['parts']; ?>/128</p>

              <p>lives: <?php echo $gg['lives']; ?></p>

              <button id="botonspin4" onclick="spin4()" class="btn grey darken-1" <?php echo ($gg['parts'] >= 128) ? "style='display:none;'" : "style='display:initial;'"; ?>>100 Energy (150.000 U.)</button>

              <?php if ($gg['parts'] >= 128 && $gg['prepared'] != 1) {
              ?>
                <button onclick="build4()" class="btn grey darken-1" id="launch4">BUILD</button>
              <?php
              } ?>
            </div>
          </div>
        <?php
        } else { ?>
          <div style="background: black; padding: 10px; margin:auto; width: 70%;display: none;height: 500px;" id="gg4">
            <p>Delta Gate</p>
            <img src="<?php echo DOMAIN; ?>img/delta.png" style="display:block;margin:auto;">
            <div id="contenedor_gg4">
              <p id="piezes4">Parts: 0/128</p>
              <p>lives: 3</p>
              <button id="botonspin4" onclick="spin4()" class="btn grey darken-1">100 Energy (150.000 U.) </button>
            </div>
          </div>
        <?php
        }
        ?>

        <?php
        $result = $mysqli->query('SELECT * FROM player_galaxygates WHERE userId=' . $player['userId'] . " AND gateId=5");
        if (mysqli_num_rows($result)) {
          $gg = $result->fetch_assoc();
        ?>
          <div style="background: black; padding: 10px; margin:auto; width: 70%;display: none;height: 500px;" id="gg5">
            <p>Epsilon Gate</p>
            <img src="<?php echo DOMAIN; ?>img/epsilon.png" style="display:block;margin:auto;">
            <div id="contenedor_gg5">
              <p id="piezes5">Parts: <?php echo ($gg['parts'] >= 99) ? 99 : $gg['parts']; ?>/99</p>

              <p>lives: <?php echo $gg['lives']; ?></p>

              <button id="botonspin5" onclick="spin5()" class="btn grey darken-1" <?php echo ($gg['parts'] >= 99) ? "style='display:none;'" : "style='display:initial;'"; ?>>100 Energy (150.000 U.)</button>

              <?php if ($gg['parts'] >= 99 && $gg['prepared'] != 1) {
              ?>
                <button onclick="build5()" class="btn grey darken-1" id="launch5">BUILD</button>
              <?php
              } ?>
            </div>
          </div>
        <?php
        } else { ?>
          <div style="background: black; padding: 10px;margin:auto; width: 70%; display: none;height: 500px;" id="gg5">
            <p>Epsilon Gate</p>
            <img src="<?php echo DOMAIN; ?>img/epsilon.png" style="display:block;margin:auto;">
            <div id="contenedor_gg5">
              <p id="piezes5">Parts: 0/99</p>
              <p>lives: 3</p>
              <button id="botonspin5" onclick="spin5()" class="btn grey darken-1">100 Energy (150.000 U.) </button>
            </div>
          </div>
        <?php
        }
        ?>

        <?php
        $result = $mysqli->query('SELECT * FROM player_galaxygates WHERE userId=' . $player['userId'] . " AND gateId=6");
        if (mysqli_num_rows($result)) {
          $gg = $result->fetch_assoc();
        ?>
          <div style="background: black; padding: 10px;margin:auto; width: 70%; display: none;height: 500px;" id="gg6">
            <p>Zeta Gate</p>
            <img src="<?php echo DOMAIN; ?>img/zeta.png" width="330px" style="display:block;margin:auto;">
            <div id="contenedor_gg6">
              <p id="piezes6">Parts: <?php echo ($gg['parts'] >= 128) ? 128 : $gg['parts']; ?>/128</p>

              <p>lives: <?php echo $gg['lives']; ?></p>

              <button id="botonspin6" onclick="spin6()" class="btn grey darken-1" <?php echo ($gg['parts'] >= 128) ? "style='display:none;'" : "style='display:initial;'"; ?>>100 Energy (150.000 U.)</button>

              <?php if ($gg['parts'] >= 128 && $gg['prepared'] != 1) {
              ?>
                <button onclick="build6()" class="btn grey darken-1" id="launch6">BUILD</button>
              <?php
              } ?>
            </div>
          </div>
        <?php
        } else { ?>
          <div style="background: black; padding: 10px; margin:auto; width: 70%; display: none;height: 500px;" id="gg6">
            <p>Zeta Gate</p>
            <img src="<?php echo DOMAIN; ?>img/zeta.png" width="330px" style="display:block;margin:auto;">
            <div id="contenedor_gg6">
              <p id="piezes6">Parts: 0/128</p>
              <p>lives: 3</p>
              <button id="botonspin6" onclick="spin6()" class="btn grey darken-1">100 Energy (150.000 U.) </button>
            </div>
          </div>
        <?php
        }
        ?>


      </div>
    </div>
  </div>
  <script>
    /* Alfa */
    let piezes1 = document.getElementById("piezes1");
    let botonspin1 = document.getElementById("botonspin1");
    let contenedor1 = document.getElementById("contenedor_gg1");
    let switch1 = true;
    /* Beta */
    let piezes2 = document.getElementById("piezes2");
    let botonspin2 = document.getElementById("botonspin2");
    let contenedor2 = document.getElementById("contenedor_gg2");
    let switch2 = true;
    /* Gamma */
    let piezes3 = document.getElementById("piezes3");
    let botonspin3 = document.getElementById("botonspin3");
    let contenedor3 = document.getElementById("contenedor_gg3");
    let switch3 = true;
    /* Delta */
    let piezes4 = document.getElementById("piezes4");
    let botonspin4 = document.getElementById("botonspin4");
    let contenedor4 = document.getElementById("contenedor_gg4");
    let switch4 = true;
    /* Epsilon */
    let piezes5 = document.getElementById("piezes5");
    let botonspin5 = document.getElementById("botonspin5");
    let contenedor5 = document.getElementById("contenedor_gg5");
    let switch5 = true;
    /* Zeta */
    let piezes6 = document.getElementById("piezes6");
    let botonspin6 = document.getElementById("botonspin6");
    let contenedor6 = document.getElementById("contenedor_gg6");
    let switch6 = true;
    /* ggs */
    let gg1 = document.getElementById("gg1");
    let gg2 = document.getElementById("gg2");
    let gg3 = document.getElementById("gg3");
    let gg4 = document.getElementById("gg4");
    let gg5 = document.getElementById("gg5");
    let gg6 = document.getElementById("gg6");

    function changeGate(gateId) {
      switch (gateId) {
        case 1:
          gg1.style.display = "block";
          gg2.style.display = "none";
          gg3.style.display = "none";
          gg4.style.display = "none";
          gg5.style.display = "none";
          gg6.style.display = "none";
          break;
        case 2:
          gg1.style.display = "none";
          gg2.style.display = "block";
          gg3.style.display = "none";
          gg4.style.display = "none";
          gg5.style.display = "none";
          gg6.style.display = "none";

          break;
        case 3:
          gg1.style.display = "none";
          gg2.style.display = "none";
          gg3.style.display = "block";
          gg4.style.display = "none";
          gg5.style.display = "none";
          gg6.style.display = "none";
          break;
        case 4:
          gg1.style.display = "none";
          gg2.style.display = "none";
          gg3.style.display = "none";
          gg4.style.display = "block";
          gg5.style.display = "none";
          gg6.style.display = "none";
          break;
        case 5:
          gg1.style.display = "none";
          gg2.style.display = "none";
          gg3.style.display = "none";
          gg4.style.display = "none";
          gg5.style.display = "block";
          gg6.style.display = "none";
          break;
        case 6:
          gg1.style.display = "none";
          gg2.style.display = "none";
          gg3.style.display = "none";
          gg4.style.display = "none";
          gg5.style.display = "none";
          gg6.style.display = "block";
          break;
      }
    }

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
              piezes1.innerHTML = `Parts: 34/34`;
              if (switch1) {
                botonspin1.style.display = "none";
                contenedor1.innerHTML += '<button onclick="build1()" class="btn grey darken-1" id="launch1">BUILD</button>';
                switch1 = false;
              }
            }
            piezes1.innerHTML = `Parts: ${json.piezes}/34`;
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
              piezes2.innerHTML = `Parts: 48/48`;

              if (switch2) {
                botonspin2.style.display = "none";
                contenedor2.innerHTML += '<button onclick="build2()" class="btn grey darken-1" id="launch2">BUILD</button>';
                switch2 = false;
              }
            }
            piezes2.innerHTML = `Parts: ${json.piezes}/48`;
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
              piezes3.innerHTML = `Parts: 82/82`;

              if (switch3) {
                botonspin3.style.display = "none";
                contenedor3.innerHTML += '<button onclick="build3()" class="btn grey darken-1" id="launch3">BUILD</button>';
                switch3 = false;
              }
            }
            piezes3.innerHTML = `Parts: ${json.piezes}/82`;
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function spin4() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=4&action=galaxygate',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {

            var html = '<span>' + json.message + ' </span>';

            if (json.piezes >= 128) {
              json.piezes = 128;
              piezes4.innerHTML = `Parts: 128/128`;

              if (switch4) {
                botonspin4.style.display = "none";
                contenedor4.innerHTML += '<button onclick="build4()" class="btn grey darken-1" id="launch4">BUILD</button>';
                switch4 = false;
              }
            }

            piezes4.innerHTML = `Parts: ${json.piezes}/128`;

            M.toast({
              html: html
            });
          }
        }
      });
    }

    function spin5() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=5&action=galaxygate',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {

            var html = '<span>' + json.message + ' </span>';

            if (json.piezes >= 99) {
              json.piezes = 99;
              piezes5.innerHTML = `Parts: 99/99`;

              if (switch5) {
                botonspin5.style.display = "none";
                contenedor5.innerHTML += '<button onclick="build5()" class="btn grey darken-1" id="launch5">BUILD</button>';
                switch5 = false;
              }
            }

            piezes5.innerHTML = `Parts: ${json.piezes}/99`;

            M.toast({
              html: html
            });
          }
        }
      });
    }

    function spin6() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=6&action=galaxygate',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {

            var html = '<span>' + json.message + ' </span>';

            if (json.piezes >= 111) {
              json.piezes = 111;
              piezes6.innerHTML = `Parts: 111/111`;

              if (switch6) {
                botonspin6.style.display = "none";
                contenedor6.innerHTML += '<button onclick="build6()" class="btn grey darken-1" id="launch6">BUILD</button>';
                switch6 = false;
              }
            }

            piezes6.innerHTML = `Parts: ${json.piezes}/111`;

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

    function build4() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=4&action=buildergg',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            let launch4 = document.getElementById("launch4");
            launch4.style.display = "none";
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function build5() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=5&action=buildergg',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            let launch5 = document.getElementById("launch5");
            launch5.style.display = "none";
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function build6() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=6&action=buildergg',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            let launch6 = document.getElementById("launch6");
            launch6.style.display = "none";
            M.toast({
              html: html
            });
          }
        }
      });
    }
  </script>
  <?php require_once(INCLUDES . 'footer.php'); ?>