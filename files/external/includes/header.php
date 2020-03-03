<?php
	try{
		if (!file_exists('anti_ddos/start.php'))
			throw new Exception ('anti_ddos/start.php does not exist');
		else
			require_once('anti_ddos/start.php'); 
	} 
	//CATCH the exception if something goes wrong.
	catch (Exception $ex) {
		//echo '<div style="padding:10px;color:white;position:fixed;top:0;left:0;width:100%;background:black;text-align:center;">The <a href="https://github.com/sanix-darker/antiddos-system" target="_blank">"AntiDDOS System"</a> failed to load properly on this Web Site, please de-comment the \'catch Exception\' to see what happening!</div>';
		//Print out the exception message.
		//echo $ex->getMessage();
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>DeathSpace: Multiplayer Game</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="<?php echo DOMAIN; ?>css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="<?php echo DOMAIN; ?>css/style.css" />
  <!-- CUSTOM CSS by Lortega-->
  <link type="text/css" rel="stylesheet" href="<?php echo DOMAIN; ?>css/custom/custom_index.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        background: url('../img/backgroundEIC.jpg');
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
        <h1 class="server_name">DeathSpace.net</h1>
        <nav class="grey darken-4">
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
            <li><a href="<?php echo DOMAIN; ?>shop"><i class="material-icons left">attach_money</i>Shop</a></li>
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
  <?php } ?>