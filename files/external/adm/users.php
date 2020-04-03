<?php
require_once(INCLUDES . 'header.php');

$mysqli = Database::GetInstance();
$player = Functions::GetPlayer();

$server_response = "...";
$id = $page[2];
function custom_number_format( $n, $precision = 1 ) {
    if ($n < 900) {
        // 0 - 900
        $n_format = number_format($n, $precision);
        $suffix = '';
    } else if ($n < 900000) {
        // 0.9k-850k
        $n_format = number_format($n / 1000, $precision);
        $suffix = 'K';
    } else if ($n < 900000000) {
        // 0.9m-850m
        $n_format = number_format($n / 1000000, $precision);
        $suffix = 'M';
    } else if ($n < 900000000000) {
        // 0.9b-850b
        $n_format = number_format($n / 1000000000, $precision);
        $suffix = 'B';
    } else {
        // 0.9t+
        $n_format = number_format($n / 1000000000000, $precision);
        $suffix = 'T';
    }
  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
  // Intentionally does not affect partials, eg "1.50" -> "1.50"
    if ( $precision > 0 ) {
        $dotzero = '.' . str_repeat( '0', $precision );
        $n_format = str_replace( $dotzero, '', $n_format );
    }
    return $n_format . $suffix;
}
/* Finder */
if (isset($_POST['search'])) {

	//find by Name
	if($_POST['type'] == "on"){
		$sql = "SELECT * FROM player_accounts WHERE username = '".$_POST['search']."' or pilotName = '".$_POST['search']."'";
	 }else if($_POST['type'] != "on"){
		 $sql = "SELECT * FROM player_accounts WHERE userId = '".$_POST['search']."'";
	 }
		$result = $mysqli->query($sql);
		if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               $user = "<table>
        <thead>
          <tr>
              <th>ID</th>
              <th>username</th>
              <th>Pilotname</th>
              <th>Uridium</th>
              <th>Credits</th>
              <th>Honor</th>
              <th>Experience</th>
              <th>Email</th>
              <th>Premium</th>
              <th>Rank</th>
              <th>Last IP</th>
              <th>Old Names</th>
              <th>Creatation Date</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>".$row["userId"]."</td>
            <td>".$row["username"]."</td>
            <td>".$row["pilotName"]."</td>
            <td>".custom_number_format(json_decode($row["data"])->uridium)."</td>
            <td>".custom_number_format(json_decode($row["data"])->credits)."</td>
            <td>".custom_number_format(json_decode($row["data"])->honor)."</td>
            <td>".custom_number_format(json_decode($row["data"])->experience)."</td>
            <td>".$row["email"]."</td>
            <td>".$row["premium"]."</td>
            <td>".$row["rank"]."</td>
            <td>".json_decode($row["info"])->lastIP."</td>
            <td>".$row["oldPilotNames"]."</td>
            <td>".json_decode($row["info"])->registerDate."</td>
            <td><a href='./users/".$row["userId"]."'><i class='material-icons left'>edit</i></a></td>
          </tr>
         
        </tbody>
      </table>";
            }
         } else {
            $user = "0 results";
         }
   
}

/* Editor */ 
		if(isset($id)){
		$sql = "SELECT * FROM player_accounts WHERE userId = '".$id."'";
		$result = $mysqli->query($sql);
		if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               $user = '<div class="row">
    <form method="post" class="col s12">
      <div class="row">
        <div class="input-field col s3">
          <input disabled style="color: #fff; font-size: 16px;" placeholder="'.$row["userId"].'" value="'.$row["userId"].'" name="userId" id="userId" type="text" class="validate">
          <label style="color: #fff; font-size: 16px;" for="userId">User ID</label>
        </div>
        <div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.$row["username"].'" value="'.$row["username"].'" name="username" id="username" type="text" class="validate">
          <label style="color: #fff; font-size: 16px;" for="username">Username</label>
        </div>
		<div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.$row["pilotName"].'" value="'.$row["pilotName"].'" name="pilotName" id="pilotName" type="text" class="validate">
          <label style="color: #fff; font-size: 16px;" for="pilotName">Pilotname</label>
        </div>
		<div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.$row["email"].'" value="'.$row["email"].'" name="email" id="email" type="text" class="validate">
          <label style="color: #fff; font-size: 16px;" for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.json_decode($row["data"])->uridium.'" value="'.json_decode($row["data"])->uridium.'" name="uridium" id="uridium" type="number" class="validate">
          <label style="color: #fff; font-size: 16px;" for="uiridum">Uridium</label>
        </div>
		 <div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.json_decode($row["data"])->credits.'" value="'.json_decode($row["data"])->credits.'" name="credits" id="credits" type="number" class="validate">
          <label style="color: #fff; font-size: 16px;" for="credits">Credits</label>
        </div>
		<div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.json_decode($row["data"])->honor.'" value="'.json_decode($row["data"])->honor.'" name="honor" id="honor" type="number" class="validate">
          <label style="color: #fff; font-size: 16px;" for="honor">Honor</label>
        </div>
		<div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.json_decode($row["data"])->experience.'" value="'.json_decode($row["data"])->experience.'" name="experience" id="experience" type="number" class="validate">
          <label style="color: #fff; font-size: 16px;" for="experience">Experience</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.$row["premium"].'" value="'.$row["premium"].'" name="premium" id="premium" type="number" class="validate">
          <label style="color: #fff; font-size: 16px;" for="premium">Premium</label>
        </div>
		<div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.$row["shipId"].'" value="'.$row["shipId"].'" name="shipId" id="shipId" type="number" class="validate">
          <label style="color: #fff; font-size: 16px;" for="shipId">Ship ID</label>
        </div>
		<div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.$row["title"].'" value="'.$row["title"].'" name="title" id="title" type="text" class="validate">
          <label style="color: #fff; font-size: 16px;" for="title">Title</label>
        </div>
		<div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.$row["factionId"].'" value="'.$row["factionId"].'" name="factionId" id="factionId" type="number" class="validate">
          <label style="color: #fff; font-size: 16px;" for="factionId">Faction ID</label>
        </div>
      </div>
      <div class="row">
	    <div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.$row["clanId"].'" value="'.$row["clanId"].'" name="clanId" id="clanId" type="number" class="validate">
          <label style="color: #fff; font-size: 16px;" for="clanId">Clan ID</label>
        </div>
        <div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.$row["rankId"].'" value="'.$row["rankId"].'" name="rankId" id="rankId" type="number" class="validate">
          <label style="color: #fff; font-size: 16px;" for="rankId">Rank ID</label>
        </div>
		<div class="input-field col s3">
          <input style="color: #fff; font-size: 16px;" placeholder="'.$row["rank"].'" value="'.$row["rank"].'" name="rank" id="rank" type="number" class="validate">
          <label style="color: #fff; font-size: 16px;" for="rank">Rank </label>
        </div>
      </div>
      
      </div>
	   <button type="submit" class="btn green darken-1 col s12">Update User</button>
    </form>
  </div>';
			 
            }
         } else {
            $user = "0 results";
         }
		 if (isset($_POST['username']) && isset($_POST['pilotName'])) {
			 $query = "UPDATE player_accounts SET data = '{\"uridium\":".$_POST['uridium'].",\"credits\":".$_POST['credits'].",\"honor\":".$_POST['honor'].",\"experience\":".$_POST['experience'].",\"jackpot\":0}', `pilotName` = '".$_POST['pilotName']."', `email` = '".$_POST['email']."', `shipId` = '".$_POST['shipId']."', `premium` = '".$_POST['premium']."', `rankId` = '".$_POST['rankId']."', `clanId` = '".$_POST['clanId']."', `factionId` = '".$_POST['factionId']."', `rank` = '".$_POST['rank']."',`title` = '".$_POST['title']."' WHERE `player_accounts`.`userId` = ".$id.";";
    $mysqli->query($query);
	
	/* Save acp_log*/
	$acp_log = "INSERT INTO `acp_logs` (`id`, `userId`, `action`, `date`) VALUES (NULL, '". $player['userId']."', 'Edit User id: ".$id." ". json_encode($_POST)  . "', current_timestamp());";
    $mysqli->query($acp_log);
	$updated = 1;
		 // UPDATE `player_accounts` SET `data` = '{\"uridium\":100000,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', `pilotName` = 'Oscar', `email` = 'ooscargerman@gmail.com', `shipId` = '102', `premium` = '1', `title` = 'title' WHERE `player_accounts`.`userId` = 3010;
		//print_r($_POST); 
		 }
		}
	


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
					   <li><a href="<?php echo DOMAIN; ?>adm/new"><i class="material-icons left">library_books</i>News</a></li>
					   <li><a href="<?php echo DOMAIN; ?>adm/users"><i class="material-icons left">supervisor_account</i>Users</a></li>
					   <li><a href="<?php echo DOMAIN; ?>adm/bans"><i class="material-icons left">block</i>Bans</a></li>
					   <li><a href="<?php echo DOMAIN; ?>adm/clans"><i class="material-icons left">group</i>Clans</a></li>
					   <li><a href="<?php echo DOMAIN; ?>adm/logs"><i class="material-icons left">history</i>Logs</a></li>
					   <li><a href="<?php echo DOMAIN; ?>adm/extras"><i class="material-icons left">star</i>Extras</a></li>
					   
					   </ul>
					</nav>
					</div>
					<?php $id = $page[2];
						if(!isset($id)){ ?>
                    <div style="display: flex;">
                        <div class="card white-text grey darken-4 padding-15" style="width: 100%; overflow:auto; display: block !important;">
                            <!-- working -->
							
                            <form method="post">
                                <p>Find User by Name or ID:</p>
                                <input type="text" style="color: white;" name="search" id="search" placeholder="Name or ID">
								<div class="switch"> <label style="color: #fff; font-size: 16px;"> ID <input type="checkbox" name="type" > <span class="lever"></span> Name </label> </div>
                               <br>
							   <button class="btn grey darken-1 col s12">Search</button>
                            </form>
							<br>
							<br>
							<br>
                            <h4><strong>User Preview:</strong></h4>
							
							<?php if(isset($user)){echo $user;} ?>
                     
                        </div>
                    </div>
						<?php } ?>
					<?php $id = $page[2];
						if(isset($id)){ ?>
						<?php if($updated == 1) { ?> <div class="card-panel green">Edited successfully!</div><?php } ?>
						<div style="display: flex;">
                        <div class="card white-text grey darken-4 padding-15" style="width: 100%; overflow:auto; display: block !important;">
                            <!-- working -->
							
                           
							<?php if(isset($user)){echo $user;} ?>
							
                     
                        </div>
                    </div>
						<?php } ?>
               
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