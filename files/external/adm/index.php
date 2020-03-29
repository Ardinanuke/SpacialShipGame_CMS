<?php
require_once(INCLUDES . 'header.php');

$mysqli = Database::GetInstance();
$player = Functions::GetPlayer();

/* User Registered */
 $Users_registered = $mysqli->query('SELECT * FROM player_accounts;');
/* User Banned */
 $Users_banned = $mysqli->query('SELECT * FROM user_bans;');
/* User Premium */
 $Users_premium = $mysqli->query('SELECT * FROM player_accounts WHERE premium = 1;');
  

?>

<div id="main">
    <div class="container">
        <div class="row"> <?php

                            if ($player['rankId'] == '21') {

                               
                                    /* Permitir acceso al Query Builder              
        UPDATE player_accounts SET data = '{"uridium":0,"credits":0,"honor":0,"experience":0,"jackpot":0}' WHERE userId=14;
        */
                            ?>
                    <div class="card white-text grey darken-4 padding-15">
					<h4><strong>Admin Tools</strong></h4>
					<nav class="grey darken-4" style="overflow: auto;">
					<ul>
                       <li><a href="<?php echo DOMAIN; ?>adm/index"><i class="material-icons left">home</i>Home</a></li>
					   <li><a href="<?php echo DOMAIN; ?>adm/news"><i class="material-icons left">library_books</i>News</a></li>
					   <li><a href="<?php echo DOMAIN; ?>adm/users"><i class="material-icons left">supervisor_account</i>Users</a></li>
					   <li><a href="<?php echo DOMAIN; ?>adm/bans"><i class="material-icons left">block</i>Bans</a></li>
					   <li><a href="<?php echo DOMAIN; ?>adm/clans"><i class="material-icons left">group</i>Clans</a></li>
					   <li><a href="<?php echo DOMAIN; ?>adm/logs"><i class="material-icons left">history</i>Logs</a></li>
					   <li><a href="<?php echo DOMAIN; ?>adm/extras"><i class="material-icons left">star</i>Extras</a></li>
					   
					   </ul>
					</nav>
					
					</div>
					<div class="card white-text grey darken-4 padding-15">
					<h4><strong>Welcome (<?php echo $player['pilotName']; ?>) to Admin Tools </strong></h4>
					Please use this tool responsibly remeber <strong>WE TRACK THE WHOLE ACTIVITY OF THIS TOOL. </strong> If we detect inappropriate use your rank will be removed and you account will be banned. 
					</br>
					</div>
                    <div style="display: flex;">
                        <div class="card white-text grey darken-4 padding-15" style="width: 45%; margin-right: 1em;">
                            <h4><strong>Server Stats:</strong></h4>
							<h4>Users Online: <b>150</b></h4>
							<h4>Users Banned: <b><b><?= mysqli_num_rows($Users_banned);?></b></b></h4>
							<h4>Users Registered: <b><b><?= mysqli_num_rows($Users_registered);?></b></b></h4>
							<h4>Users Premium: <b><b><?= mysqli_num_rows($Users_premium);?></b></b></h4>
                    
                        </div>
                        <div class="card white-text grey darken-4 padding-15" style="width: 100%; overflow:auto; display: block !important; height: 100px;">
                            <!-- working -->
                            <h4><strong>Something cool:</strong></h4>
								 ...
                        </div>
                    </div>

                
           

                <br>
        </div>
    <?php
                            } else {
                                /* Restringir acceso al Query Builder*/ ?>
        <div class="card white-text grey darken-4 padding-15">
            <h4>Not implemented yet.</h4>
        </div>
    <?php } ?>



    </div>
</div>
</div>

<?php require_once(INCLUDES . 'footer.php'); ?>