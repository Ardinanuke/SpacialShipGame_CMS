<?php
require_once(INCLUDES . 'header.php');

$mysqli = Database::GetInstance();
$player = Functions::GetPlayer();
$id = $page[2];
if(isset($id)){
	$new = $mysqli->query('SELECT * FROM news WHERE id = ' . $id . '')->fetch_assoc();
	if($new == NULL){
		header("location:javascript://history.go(-1)");
	}
	if (isset($_POST['title']) && isset($_POST['summernote'])) {
		$query = "UPDATE news SET html_code = '".$_POST['summernote']."' WHERE id = '".$id."'";
    $mysqli->query($query);
    $server_response = 2;
	}
}else{

/* Create a new */
if (isset($_POST['title']) && isset($_POST['summernote'])) {
	$query = "INSERT INTO news (id,html_code) VALUES (NULL,'" . $_POST['summernote'] . "')";
    $mysqli->query($query);
    $server_response = 1;
}
}
?>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
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

                    <div style="display: flex;">
                        <div class="card white-text grey darken-4 padding-15" style="width: 45%; margin-right: 1em;">
                            <h4><strong>News:</strong></h4>
							
                           <?php $sql = "SELECT * FROM news";

if ($result = $mysqli -> query($sql)) {
  while ($row = $result -> fetch_row()) {
    echo "Title: <b> Undefined </b> ID: <b>".$row[0]."</b> | <a href='/adm/news/".$row[0]."'> Edit</a> | <a href='".$row[0]."'>Delete</a> <br>";
  }
  $result -> free_result();
}  ?>
                        </div>
                        <div class="card white-text grey darken-4 padding-15" style="width: 100%; overflow:auto; display: block !important;">
                            <!-- working -->
                            <h4><strong>Create a new:</strong></h4>
						<?php if($server_response == 1) { ?> <div class="card-panel teal lighten-2">New Created!</div><?php }elseif($server_response == 2){ ?>	<div class="card-panel teal lighten-2">New Updated!</div> <?php }?>					
                           <form method="post">
						    <input type="text" style="color: white;" name="title" id="title" placeholder="Title" required>
                               
									<textarea id="summernote" name="summernote" required><?php echo $new["html_code"]; ?></textarea>
									 <button class="btn green darken-1 col s12"><?php if(isset($id)){ echo "Update"; }else{echo "Create";} ?></button>
							</form>
<script>
$(document).ready(function() {
 $('#summernote').summernote({
        placeholder: 'Type your information',
        tabsize: 2,
        height: 500
      });
  
});
</script>
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
