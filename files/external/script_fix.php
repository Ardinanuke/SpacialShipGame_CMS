<?php 
/* script para eliminar bug player_equipment */
$mysqli = Database::GetInstance();

$result = $mysqli->query("SELECT * FROM player_settings");

while($row = mysqli_fetch_array($result)){
    $id = $row['userId'];
    
    $cooldowns = '{"ammunition_mine_smb-01":"0001-01-01 00:00:00","equipment_extra_cpu_ish-01":"0001-01-01 00:00:00","ammunition_specialammo_emp-01":"0001-01-01 00:00:00","ammunition_mine":"0001-01-01 00:00:00","ammunition_specialammo_dcr-250":"0001-01-01 00:00:00","ammunition_specialammo_pld-8":"0001-01-01 00:00:00","ammunition_specialammo_r-ic3":"0001-01-01 00:00:00","tech_energy-leech":"","tech_chain-impulse":"","tech_precision-targeter":"","tech_backup-shields":"","tech_battle-repair-bot":""}';

    $mysqli->query("UPDATE player_settings SET cooldowns='".$cooldowns."' WHERE userId=".$id);
}

$mysqli->commit();
$mysqli->close();
?>