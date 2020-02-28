<?php 
require_once(INCLUDES . 'header.php'); 

$mysqli = Database::GetInstance();

$drones = '[{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]}]';

$mysqli->query("UPDATE player_equipment SET config1_drones ='".$drones."' , config2_drones = '".$drones."' ");
$mysqli->commit();
$mysqli->close();

echo'<h1 style="color: white;"> Script executed.</h1>';
?>