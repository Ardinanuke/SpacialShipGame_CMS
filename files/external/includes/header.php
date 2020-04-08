<?php
/*
try {
  if (!file_exists('anti_ddos/start.php'))
    throw new Exception('anti_ddos/start.php does not exist');
  else
    require_once('anti_ddos/start.php');
}
//CATCH the exception if something goes wrong.
catch (Exception $ex) {
  //echo '<div style="padding:10px;color:white;position:fixed;top:0;left:0;width:100%;background:black;text-align:center;">The <a href="https://github.com/sanix-darker/antiddos-system" target="_blank">"AntiDDOS System"</a> failed to load properly on this Web Site, please de-comment the \'catch Exception\' to see what happening!</div>';
  //Print out the exception message.
  //echo $ex->getMessage();
}*/
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>DeathSpace: Multiplayer Game</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="<?php echo DOMAIN; ?>css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="<?php echo DOMAIN; ?>css/style.css" />
  <!-- CUSTOM CSS by Lortega-->
  <link type="text/css" rel="stylesheet" href="<?php echo DOMAIN; ?>css/custom/custom_index.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link href="http://www.mind.ilstu.edu/include/flv_player.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="http://www.mind.ilstu.edu/include/swfobject.js"></script>
  <?php if (Functions::IsLoggedIn() && ((isset($page[0]) && $page[0] === 'company_select') || (isset($page[0]) && $page[0] === 'clan' && isset($page[1]) && $page[1] === 'company'))) { ?>
    <link type="text/css" rel="stylesheet" href="<?php echo DOMAIN; ?>css/company-select.css" />
  <?php } ?>
  <?php if (Functions::IsLoggedIn() && (isset($page[0]) && $page[0] === 'skill_tree')) { ?>
    <link type="text/css" rel="stylesheet" href="<?php echo DOMAIN; ?>css/skill-tree.css" />
  <?php } ?>
</head>

<body>
  <?php if (Functions::IsLoggedIn()) { ?>
    <style>
      body {
        background: url('../../img/backgroundEIC.jpg') !important;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
      }
    </style>
    <div class="container_head">
      <a href="<?php echo DOMAIN; ?>map-revolution" target="_blank">
        <div class="polygon2">
          <p class="texto_poly">START</p>
        </div>
      </a>

      <div class="container custom_container">
        <h1 class="server_name">Play.DeathSpaces.com</h1>
        <nav class="grey darken-4" style="overflow: auto;">
          <ul>
            <li><a href="<?php echo DOMAIN; ?>"><i class="material-icons left">home</i>Home</a></li>
            <li><a><i class="material-icons left">flight</i>Hangar <i class="material-icons right">keyboard_arrow_down</i></a>
              <ol class="menu_dropdown grey darken-3">
                <li class="no_float"><a href="<?php echo DOMAIN; ?>ships">SHIPS</a></li>
                <li class="no_float"><a href="<?php echo DOMAIN; ?>equipment">EQUIPMENT</a></li>
                <li class="no_float"><a href="<?php echo DOMAIN; ?>skill_tree">SKILL TREE</a></li>
              </ol>
            </li>
            <li><a><i class="material-icons left">group</i>Clan <i class="material-icons right">keyboard_arrow_down</i></a>
              <ol class="menu_dropdown grey darken-3">
                <?php if ($player['clanId'] <= 0) { ?>
                  <li class="no_float"><a href="<?php echo DOMAIN; ?>clan/join">JOIN</a></li>
                  <li class="no_float"><a href="<?php echo DOMAIN; ?>clan/found">FOUND</a></li>
                <?php } else { ?>
                  <li class="no_float"><a href="<?php echo DOMAIN; ?>clan/informations">INFORMATIONS</a></li>
                  <li class="no_float"><a href="<?php echo DOMAIN; ?>clan/members">MEMBERS</a></li>
                  <li class="no_float"><a href="<?php echo DOMAIN; ?>clan/diplomacy">DIPLOMACY</a></li>
                <?php } ?>
                <li class="no_float"><a href="<?php echo DOMAIN; ?>clan/company">COMPANY</a></li>
              </ol>
            </li>
            <li><a><i class="material-icons left">attach_money</i>Shop <i class="material-icons right">keyboard_arrow_down</i></a>
              <ol class="menu_dropdown grey darken-3">
                <li class="no_float"><a href="<?php echo DOMAIN; ?>shop">SHOP</a></li>
                <li class="no_float"><a href="<?php echo DOMAIN; ?>auctions">AUCTIONS</a></li>
                <li class="no_float"><a href="<?php echo DOMAIN; ?>premium">PREMIUM</a></li>
              </ol>
            </li>
            <li><a href="<?php echo DOMAIN; ?>gg"><i class="material-icons left">data_usage</i>Galaxy Gates</a></li>
            <li><a href="<?php echo DOMAIN; ?>settings"><i class="material-icons left">settings</i>Settings</a></li>
            <?php if ($player['rankId'] == '21') { ?>
              <li><a href="<?php echo DOMAIN; ?>querybuilder"><i class="material-icons left">settings</i>ADM</a></li>
            <?php
            } ?>
            <li><a href="/api/logout"><i class="material-icons left">input</i> Exit</a></li>
          </ul>
        </nav>
      </div>
    </div>
<style>
  .videos {
  text-align: center;
  width:100%;
  overflow: auto;
}
.iframe{
  display: flex;

  width: 200px;
}
</style>

    <!-- The Modal -->
    <div id="id04" class="w3-modal" style="height: 100%; display: none;">
      <div class="w3-modal-content modal_modification" style="height: 90% !important;">
        <div class="w3-container">
          <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-display-topright">&times;</span>
          <div class="center">
            <img src="img/youtube.png" width="50%">
            <p style="font-weight: bold; color: gold; font-size: 25px;">Youtube Stars</p>
            <p style="font-weight: bold;  font-size: 15px;">The two best videos of the week get 350,000 Uridium</p>
            <br>
            <div  class="videos">
              <iframe width="250" height="250" src="https://www.youtube.com/embed/-TEANqongAw"></iframe>
              <iframe width="250" height="250" src="https://www.youtube.com/embed/63VVUBImw64"></iframe>
            </div>
            <br><br><br>
            <a class="btn green darken-4 col s12" target="_blank" href="https://www.youtube.com/results?search_query=deathspace"  style="width: 300px !important; font-size: 14px; height: 50px !important; font-weight: bold; padding-top: 10px !important;">Upload video</a>

          </div>

        </div>
      </div>
    </div>


    <style>
      .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: red;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
        border: none;
        padding-bottom: 0.2em;
      }

      .my-float {
        margin-top: 16px;
      }
    </style>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <button class="float" onclick="document.getElementById('id04').style.display='block'">
      <img src="https://pngimage.net/wp-content/uploads/2018/06/white-youtube-png-4.png" width="30px">
    </button>
  <?php } ?>