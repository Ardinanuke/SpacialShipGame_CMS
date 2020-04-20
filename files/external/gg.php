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
    const _0xf829=['gate=3&action=galaxygate','launch1','<?php echo DOMAIN?>api/','\x20</span>','botonspin2','contenedor_gg6','piezes4','piezes','contenedor_gg1','gg4','/111','innerHTML','piezes3','botonspin4','style','contenedor_gg2','<button\x20onclick=\x22build4()\x22\x20class=\x22btn\x20grey\x20darken-1\x22\x20id=\x22launch4\x22>BUILD</button>','gate=1&action=buildergg','Parts:\x20','gate=5&action=galaxygate','gate=6&action=galaxygate','gate=4&action=galaxygate','<button\x20onclick=\x22build1()\x22\x20class=\x22btn\x20grey\x20darken-1\x22\x20id=\x22launch1\x22>BUILD</button>','Parts:\x20111/111','/99','piezes1','botonspin3','gate=4&action=buildergg','launch2','gg6','display','POST','gg2','launch6','message','/128','Parts:\x2082/82','/82','toast','piezes6','botonspin1','contenedor_gg5','getElementById','botonspin5','Parts:\x20128/128','gg5','launch4','block','none','Parts:\x2099/99','contenedor_gg4','gate=5&action=buildergg','/48','contenedor_gg3','<span>','/34','gate=2&action=galaxygate','launch3','botonspin6','gate=3&action=buildergg','<button\x20onclick=\x22build2()\x22\x20class=\x22btn\x20grey\x20darken-1\x22\x20id=\x22launch2\x22>BUILD</button>','gate=1&action=galaxygate','piezes2','parseJSON','gg3','ajax'];(function(_0x9bd417,_0xf829dc){const _0x332239=function(_0x386a91){while(--_0x386a91){_0x9bd417['push'](_0x9bd417['shift']());}};_0x332239(++_0xf829dc);}(_0xf829,0x8c));const _0x3322=function(_0x9bd417,_0xf829dc){_0x9bd417=_0x9bd417-0x0;let _0x332239=_0xf829[_0x9bd417];return _0x332239;};let apiURL=_0x3322('0x3c');let piezes1=document[_0x3322('0x22')](_0x3322('0x11'));let botonspin1=document[_0x3322('0x22')](_0x3322('0x20'));let contenedor1=document[_0x3322('0x22')](_0x3322('0x0'));let switch1=!![];let piezes2=document[_0x3322('0x22')](_0x3322('0x36'));let botonspin2=document[_0x3322('0x22')](_0x3322('0x3e'));let contenedor2=document[_0x3322('0x22')](_0x3322('0x7'));let switch2=!![];let piezes3=document[_0x3322('0x22')](_0x3322('0x4'));let botonspin3=document[_0x3322('0x22')](_0x3322('0x12'));let contenedor3=document[_0x3322('0x22')](_0x3322('0x2d'));let switch3=!![];let piezes4=document['getElementById'](_0x3322('0x40'));let botonspin4=document[_0x3322('0x22')](_0x3322('0x5'));let contenedor4=document[_0x3322('0x22')](_0x3322('0x2a'));let switch4=!![];let piezes5=document[_0x3322('0x22')]('piezes5');let botonspin5=document[_0x3322('0x22')](_0x3322('0x23'));let contenedor5=document[_0x3322('0x22')](_0x3322('0x21'));let switch5=!![];let piezes6=document[_0x3322('0x22')](_0x3322('0x1f'));let botonspin6=document[_0x3322('0x22')](_0x3322('0x32'));let contenedor6=document[_0x3322('0x22')](_0x3322('0x3f'));let switch6=!![];let gg1=document[_0x3322('0x22')]('gg1');let gg2=document[_0x3322('0x22')](_0x3322('0x18'));let gg3=document['getElementById'](_0x3322('0x38'));let gg4=document[_0x3322('0x22')](_0x3322('0x1'));let gg5=document[_0x3322('0x22')](_0x3322('0x25'));let gg6=document[_0x3322('0x22')](_0x3322('0x15'));function changeGate(_0x29f7e2){switch(_0x29f7e2){case 0x1:gg1[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x27');gg2[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');gg3[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');gg4['style'][_0x3322('0x16')]=_0x3322('0x28');gg5[_0x3322('0x6')][_0x3322('0x16')]='none';gg6[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');break;case 0x2:gg1[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');gg2['style']['display']=_0x3322('0x27');gg3[_0x3322('0x6')]['display']=_0x3322('0x28');gg4['style'][_0x3322('0x16')]='none';gg5[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');gg6[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');break;case 0x3:gg1[_0x3322('0x6')][_0x3322('0x16')]='none';gg2[_0x3322('0x6')][_0x3322('0x16')]='none';gg3[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x27');gg4[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');gg5[_0x3322('0x6')][_0x3322('0x16')]='none';gg6['style'][_0x3322('0x16')]='none';break;case 0x4:gg1[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');gg2[_0x3322('0x6')]['display']=_0x3322('0x28');gg3[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');gg4[_0x3322('0x6')]['display']=_0x3322('0x27');gg5[_0x3322('0x6')][_0x3322('0x16')]='none';gg6[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');break;case 0x5:gg1[_0x3322('0x6')]['display']=_0x3322('0x28');gg2[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');gg3[_0x3322('0x6')][_0x3322('0x16')]='none';gg4[_0x3322('0x6')][_0x3322('0x16')]='none';gg5[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x27');gg6[_0x3322('0x6')][_0x3322('0x16')]='none';break;case 0x6:gg1[_0x3322('0x6')]['display']=_0x3322('0x28');gg2[_0x3322('0x6')][_0x3322('0x16')]='none';gg3[_0x3322('0x6')]['display']=_0x3322('0x28');gg4['style'][_0x3322('0x16')]=_0x3322('0x28');gg5['style'][_0x3322('0x16')]=_0x3322('0x28');gg6[_0x3322('0x6')]['display']=_0x3322('0x27');break;}}function spin1(){$['ajax']({'type':_0x3322('0x17'),'url':apiURL,'data':_0x3322('0x35'),'success':function(_0x41d5c2){var _0x377f24=jQuery[_0x3322('0x37')](_0x41d5c2);if(_0x377f24['message']!=''){var _0x3c93f9=_0x3322('0x2e')+_0x377f24[_0x3322('0x1a')]+_0x3322('0x3d');if(_0x377f24[_0x3322('0x41')]>=0x22){_0x377f24[_0x3322('0x41')]=0x22;piezes1['innerHTML']='Parts:\x2034/34';if(switch1){botonspin1['style'][_0x3322('0x16')]=_0x3322('0x28');contenedor1[_0x3322('0x3')]+=_0x3322('0xe');switch1=![];}}piezes1['innerHTML']=_0x3322('0xa')+_0x377f24['piezes']+_0x3322('0x2f');M[_0x3322('0x1e')]({'html':_0x3c93f9});}}});}function spin2(){$[_0x3322('0x39')]({'type':_0x3322('0x17'),'url':apiURL,'data':_0x3322('0x30'),'success':function(_0x4ad61f){var _0x2fd704=jQuery['parseJSON'](_0x4ad61f);if(_0x2fd704[_0x3322('0x1a')]!=''){var _0x46cc42=_0x3322('0x2e')+_0x2fd704[_0x3322('0x1a')]+_0x3322('0x3d');if(_0x2fd704[_0x3322('0x41')]>=0x30){_0x2fd704[_0x3322('0x41')]=0x30;piezes2[_0x3322('0x3')]='Parts:\x2048/48';if(switch2){botonspin2[_0x3322('0x6')][_0x3322('0x16')]='none';contenedor2['innerHTML']+=_0x3322('0x34');switch2=![];}}piezes2[_0x3322('0x3')]=_0x3322('0xa')+_0x2fd704['piezes']+_0x3322('0x2c');M['toast']({'html':_0x46cc42});}}});}function spin3(){$['ajax']({'type':_0x3322('0x17'),'url':apiURL,'data':_0x3322('0x3a'),'success':function(_0x2e7c65){var _0x2fa4c7=jQuery['parseJSON'](_0x2e7c65);if(_0x2fa4c7[_0x3322('0x1a')]!=''){var _0x567bcc='<span>'+_0x2fa4c7[_0x3322('0x1a')]+_0x3322('0x3d');if(_0x2fa4c7[_0x3322('0x41')]>=0x52){_0x2fa4c7[_0x3322('0x41')]=0x52;piezes3['innerHTML']=_0x3322('0x1c');if(switch3){botonspin3['style'][_0x3322('0x16')]=_0x3322('0x28');contenedor3[_0x3322('0x3')]+='<button\x20onclick=\x22build3()\x22\x20class=\x22btn\x20grey\x20darken-1\x22\x20id=\x22launch3\x22>BUILD</button>';switch3=![];}}piezes3[_0x3322('0x3')]=_0x3322('0xa')+_0x2fa4c7['piezes']+_0x3322('0x1d');M[_0x3322('0x1e')]({'html':_0x567bcc});}}});}function spin4(){$['ajax']({'type':_0x3322('0x17'),'url':apiURL,'data':_0x3322('0xd'),'success':function(_0xc6550){var _0x2924d6=jQuery[_0x3322('0x37')](_0xc6550);if(_0x2924d6[_0x3322('0x1a')]!=''){var _0x1d4df1=_0x3322('0x2e')+_0x2924d6[_0x3322('0x1a')]+'\x20</span>';if(_0x2924d6[_0x3322('0x41')]>=0x80){_0x2924d6['piezes']=0x80;piezes4[_0x3322('0x3')]=_0x3322('0x24');if(switch4){botonspin4['style'][_0x3322('0x16')]=_0x3322('0x28');contenedor4[_0x3322('0x3')]+=_0x3322('0x8');switch4=![];}}piezes4['innerHTML']=_0x3322('0xa')+_0x2924d6[_0x3322('0x41')]+_0x3322('0x1b');M['toast']({'html':_0x1d4df1});}}});}function spin5(){$['ajax']({'type':_0x3322('0x17'),'url':apiURL,'data':_0x3322('0xb'),'success':function(_0x291338){var _0x37812a=jQuery[_0x3322('0x37')](_0x291338);if(_0x37812a[_0x3322('0x1a')]!=''){var _0x43ae50='<span>'+_0x37812a[_0x3322('0x1a')]+_0x3322('0x3d');if(_0x37812a[_0x3322('0x41')]>=0x63){_0x37812a[_0x3322('0x41')]=0x63;piezes5[_0x3322('0x3')]=_0x3322('0x29');if(switch5){botonspin5[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');contenedor5[_0x3322('0x3')]+='<button\x20onclick=\x22build5()\x22\x20class=\x22btn\x20grey\x20darken-1\x22\x20id=\x22launch5\x22>BUILD</button>';switch5=![];}}piezes5['innerHTML']='Parts:\x20'+_0x37812a[_0x3322('0x41')]+_0x3322('0x10');M[_0x3322('0x1e')]({'html':_0x43ae50});}}});}function spin6(){$[_0x3322('0x39')]({'type':_0x3322('0x17'),'url':apiURL,'data':_0x3322('0xc'),'success':function(_0x12b285){var _0xd6583e=jQuery[_0x3322('0x37')](_0x12b285);if(_0xd6583e[_0x3322('0x1a')]!=''){var _0x455a63=_0x3322('0x2e')+_0xd6583e['message']+_0x3322('0x3d');if(_0xd6583e['piezes']>=0x6f){_0xd6583e['piezes']=0x6f;piezes6[_0x3322('0x3')]=_0x3322('0xf');if(switch6){botonspin6[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');contenedor6[_0x3322('0x3')]+='<button\x20onclick=\x22build6()\x22\x20class=\x22btn\x20grey\x20darken-1\x22\x20id=\x22launch6\x22>BUILD</button>';switch6=![];}}piezes6['innerHTML']=_0x3322('0xa')+_0xd6583e[_0x3322('0x41')]+_0x3322('0x2');M[_0x3322('0x1e')]({'html':_0x455a63});}}});}function build1(){$[_0x3322('0x39')]({'type':'POST','url':apiURL,'data':_0x3322('0x9'),'success':function(_0x1f8a0c){var _0x4fb66c=jQuery[_0x3322('0x37')](_0x1f8a0c);if(_0x4fb66c[_0x3322('0x1a')]!=''){var _0x508004=_0x3322('0x2e')+_0x4fb66c[_0x3322('0x1a')]+_0x3322('0x3d');let _0x184861=document[_0x3322('0x22')](_0x3322('0x3b'));_0x184861[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');M[_0x3322('0x1e')]({'html':_0x508004});}}});}function build2(){$['ajax']({'type':_0x3322('0x17'),'url':apiURL,'data':'gate=2&action=buildergg','success':function(_0x5d370f){var _0x3d6e59=jQuery[_0x3322('0x37')](_0x5d370f);if(_0x3d6e59['message']!=''){var _0x14bdb3=_0x3322('0x2e')+_0x3d6e59[_0x3322('0x1a')]+'\x20</span>';let _0x42a87e=document[_0x3322('0x22')](_0x3322('0x14'));_0x42a87e['style']['display']=_0x3322('0x28');M[_0x3322('0x1e')]({'html':_0x14bdb3});}}});}function build3(){$[_0x3322('0x39')]({'type':_0x3322('0x17'),'url':apiURL,'data':_0x3322('0x33'),'success':function(_0x42c552){var _0x55b37d=jQuery[_0x3322('0x37')](_0x42c552);if(_0x55b37d[_0x3322('0x1a')]!=''){var _0x5e54aa=_0x3322('0x2e')+_0x55b37d[_0x3322('0x1a')]+'\x20</span>';let _0x58f1a7=document[_0x3322('0x22')](_0x3322('0x31'));_0x58f1a7[_0x3322('0x6')]['display']=_0x3322('0x28');M[_0x3322('0x1e')]({'html':_0x5e54aa});}}});}function build4(){$['ajax']({'type':_0x3322('0x17'),'url':apiURL,'data':_0x3322('0x13'),'success':function(_0x5e8037){var _0x429971=jQuery['parseJSON'](_0x5e8037);if(_0x429971['message']!=''){var _0x489666=_0x3322('0x2e')+_0x429971[_0x3322('0x1a')]+_0x3322('0x3d');let _0x261f8c=document[_0x3322('0x22')](_0x3322('0x26'));_0x261f8c['style'][_0x3322('0x16')]='none';M[_0x3322('0x1e')]({'html':_0x489666});}}});}function build5(){$['ajax']({'type':_0x3322('0x17'),'url':apiURL,'data':_0x3322('0x2b'),'success':function(_0x25cb27){var _0x113184=jQuery[_0x3322('0x37')](_0x25cb27);if(_0x113184[_0x3322('0x1a')]!=''){var _0xb0c115=_0x3322('0x2e')+_0x113184[_0x3322('0x1a')]+_0x3322('0x3d');let _0x331b9f=document[_0x3322('0x22')]('launch5');_0x331b9f[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');M[_0x3322('0x1e')]({'html':_0xb0c115});}}});}function build6(){$['ajax']({'type':'POST','url':apiURL,'data':'gate=6&action=buildergg','success':function(_0x1582c3){var _0x410525=jQuery[_0x3322('0x37')](_0x1582c3);if(_0x410525['message']!=''){var _0x5a1093='<span>'+_0x410525[_0x3322('0x1a')]+'\x20</span>';let _0x2944b5=document[_0x3322('0x22')](_0x3322('0x19'));_0x2944b5[_0x3322('0x6')][_0x3322('0x16')]=_0x3322('0x28');M['toast']({'html':_0x5a1093});}}});}
  </script>
  <?php require_once(INCLUDES . 'footer.php'); ?>