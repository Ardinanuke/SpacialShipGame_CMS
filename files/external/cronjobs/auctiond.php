<?php
$mysqli = Database::GetInstance();

foreach ($mysqli->query('SELECT * FROM auction_house WHERE category="hour"') as $value) {
    switch ($value['name']) {
        case 'havoc':
        case 'havoc-c':
            if ($value['bidderId'] != 0) {
                $items = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $value['bidderId'])->fetch_assoc()['items']);
                $items->havocCount += 1;
                $mysqli->query("UPDATE player_equipment SET items = '" . json_encode($items) . "' WHERE userId = " . $value['bidderId']);
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='".$value['name']."'");
            }
            break;
        case 'hercules':
        case 'hercules-c':
            if ($value['bidderId'] != 0) {
                $items = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $value['bidderId'])->fetch_assoc()['items']);
                $items->herculesCount += 1;
                $mysqli->query("UPDATE player_equipment SET items = '" . json_encode($items) . "' WHERE userId = " . $value['bidderId']);
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='".$value['name']."'");
            }
            break;
    }
}

$mysqli->close();
?>