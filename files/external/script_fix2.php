<?php 
/* script para eliminar bug player_equipment */
$mysqli = Database::GetInstance();

$result = $mysqli->query("SELECT * FROM player_accounts");
$cuentasBorradas = 0;

while($row = mysqli_fetch_array($result)){

    $id = $row['userId'];
    $experience = json_decode($row['data'])->experience;


        if($experience == 0){
            $cuentasBorradas = $cuentasBorradas + 1;
            /*
            Delete in:
            player_accounts
            player_equipment
            player_settings
            server_clan_applications
            server_clans
            */
            $mysqli->query("DELETE FROM player_accounts WHERE userId=".$id);
            $mysqli->query("DELETE FROM player_settings WHERE userId=".$id);
            $mysqli->query("DELETE FROM player_equipment WHERE userId=".$id);
        }

}

echo "Numero de cuentas borradas "+$cuentasBorradas;

$mysqli->commit();
$mysqli->close();
?>