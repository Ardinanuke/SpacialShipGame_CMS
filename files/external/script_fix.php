<?php 

$mysqli = Database::GetInstance();

$result = $mysqli->query("SELECT * FROM player_accounts");

while($row = mysqli_fetch_array($result)){
    $id = $row['userId'];
    $uridium = json_decode($row['data'])->uridium;

    if($id != 1883){
        if($uridium > 1500000){
            //{"uridium":65984,"credits":1592394,"honor":38639,"experience":3996385,"jackpot":0}
            $dataUser = '{"uridium":1500000,"credits":100000000,"honor":'.json_decode($row['data'])->honor.',"experience":'.json_decode($row['data'])->experience.',"jackpot":'.json_decode($row['data'])->jackpot.'}';
            $mysqli->query("UPDATE player_accounts SET data='".$dataUser."' WHERE userId=".$id);
        }
    }
}

$mysqli->commit();
$mysqli->close();
