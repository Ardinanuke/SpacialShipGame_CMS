<?php 
$mysqli = Database::GetInstance();

$drones = '[{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]}]';
$mysqli->query("UPDATE player_equipment SET config1_lasers='[]', config1_generators='[]', config1_drones ='".$drones."' , config2_lasers='[]', config2_generators='[]',config2_drones = '".$drones."' ");

$mysqli->commit();
$mysqli->close();
?>