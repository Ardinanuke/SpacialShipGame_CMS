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
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'hercules':
        case 'hercules-c':
            if ($value['bidderId'] != 0) {
                $items = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $value['bidderId'])->fetch_assoc()['items']);
                $items->herculesCount += 1;
                $mysqli->query("UPDATE player_equipment SET items = '" . json_encode($items) . "' WHERE userId = " . $value['bidderId']);
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'ltm-mr':
        case 'ltm-mr-c':
            if ($value['bidderId'] != 0) {
                $equipment = $mysqli->query("SELECT * FROM player_equipment WHERE userId= " . $player['userId'] . "")->fetch_assoc();
                $modules = json_decode($equipment['modules']);
                $module = '{"Id":' . (sizeof($modules) + 1) . ',"Type": 6,"InUse":false}';
                $module_array = json_decode($module, true);
                array_push($modules, $module_array);
                $mysqli->query("UPDATE player_equipment SET modules = '" . json_encode($modules) . "' WHERE userId = " . $player['userId'] . "");
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'ltm-lr':
        case 'ltm-lr-c':
            if ($value['bidderId'] != 0) {
                $equipment = $mysqli->query("SELECT * FROM player_equipment WHERE userId= " . $player['userId'] . "")->fetch_assoc();
                $modules = json_decode($equipment['modules']);
                $module = '{"Id":' . (sizeof($modules) + 1) . ',"Type": 7,"InUse":false}';
                $module_array = json_decode($module, true);
                array_push($modules, $module_array);
                $mysqli->query("UPDATE player_equipment SET modules = '" . json_encode($modules) . "' WHERE userId = " . $player['userId'] . "");
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'ram-la':
        case 'ram-la-c':
            if ($value['bidderId'] != 0) {
                $equipment = $mysqli->query("SELECT * FROM player_equipment WHERE userId= " . $player['userId'] . "")->fetch_assoc();
                $modules = json_decode($equipment['modules']);
                $module = '{"Id":' . (sizeof($modules) + 1) . ',"Type": 9,"InUse":false}';
                $module_array = json_decode($module, true);
                array_push($modules, $module_array);
                $mysqli->query("UPDATE player_equipment SET modules = '" . json_encode($modules) . "' WHERE userId = " . $player['userId'] . "");
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
    }
}

$mysqli->close();
