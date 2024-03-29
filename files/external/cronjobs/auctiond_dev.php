<?php
$mysqli = Database::GetInstance();

foreach ($mysqli->query('SELECT * FROM auction_house WHERE category="day"') as $value) {
    switch ($value['name']) {
        case 'diminisher-legend':
        case 'diminisher-legend-c':
            if ($value['bidderId'] != 0) {
                $search_design = $mysqli->query("SELECT * FROM player_designs WHERE name='ship_diminisher_design_diminisher-legend' AND userId= " .  $value['bidderId'] . ";");

                if (mysqli_num_rows($search_design) <= 0) {
                    $mysqli->query("INSERT INTO player_designs (name, baseShipId, userId) VALUES ('ship_diminisher_design_diminisher-legend', 10, " .  $value['bidderId'] . ")");
                }
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'diminisher-argon':
        case 'diminisher-argon-c':
            if ($value['bidderId'] != 0) {
                $search_design = $mysqli->query("SELECT * FROM player_designs WHERE name='ship_diminisher_design_diminisher-argon' AND userId= " .  $value['bidderId'] . ";");

                if (mysqli_num_rows($search_design) <= 0) {
                    $mysqli->query("INSERT INTO player_designs (name, baseShipId, userId) VALUES ('ship_diminisher_design_diminisher-argon', 10, " .  $value['bidderId'] . ")");
                }
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'sentinel-legend':
        case 'sentinel-legend-c':
            if ($value['bidderId'] != 0) {
                $search_design = $mysqli->query("SELECT * FROM player_designs WHERE name='ship_sentinel_design_sentinel-legend' AND userId= " .  $value['bidderId'] . ";");

                if (mysqli_num_rows($search_design) <= 0) {
                    $mysqli->query("INSERT INTO player_designs (name, baseShipId, userId) VALUES ('ship_sentinel_design_sentinel-legend', 10, " .  $value['bidderId'] . ")");
                }
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'sentinel-argon':
        case 'sentinel-argon-c':
            if ($value['bidderId'] != 0) {
                $search_design = $mysqli->query("SELECT * FROM player_designs WHERE name='ship_sentinel_design_sentinel-argon' AND userId= " .  $value['bidderId'] . ";");

                if (mysqli_num_rows($search_design) <= 0) {
                    $mysqli->query("INSERT INTO player_designs (name, baseShipId, userId) VALUES ('ship_sentinel_design_sentinel-argon', 10, " .  $value['bidderId'] . ")");
                }
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'spectrum-legend':
        case 'spectrum-legend-c':
            if ($value['bidderId'] != 0) {
                $search_design = $mysqli->query("SELECT * FROM player_designs WHERE name='ship_spectrum_design_spectrum-legend' AND userId= " .  $value['bidderId'] . ";");

                if (mysqli_num_rows($search_design) <= 0) {
                    $mysqli->query("INSERT INTO player_designs (name, baseShipId, userId) VALUES ('ship_spectrum_design_spectrum-legend', 10, " .  $value['bidderId'] . ")");
                }
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'spectrum-dusklight':
        case 'spectrum-dusklight-c':
            if ($value['bidderId'] != 0) {
                $search_design = $mysqli->query("SELECT * FROM player_designs WHERE name='ship_spectrum_design_spectrum-dusklight' AND userId= " .  $value['bidderId'] . ";");

                if (mysqli_num_rows($search_design) <= 0) {
                    $mysqli->query("INSERT INTO player_designs (name, baseShipId, userId) VALUES ('ship_spectrum_design_spectrum-dusklight', 10, " .  $value['bidderId'] . ")");
                }
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'pet':
        case 'pet-c':
            if ($value['bidderId'] != 0) {
                $items = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $value['bidderId'])->fetch_assoc()['items']);
                $items->pet = true;
                $mysqli->query("UPDATE player_equipment SET items = '" . json_encode($items) . "' WHERE userId = " . $value['bidderId']);
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'hammerclaw-carbonite':
        case 'hammerclaw-carbonite-c':
            if ($value['bidderId'] != 0) {
                $search_design = $mysqli->query("SELECT * FROM player_designs WHERE name='ship_hammerclaw_design_hammerclaw-carbonite' AND userId= " .  $value['bidderId'] . ";");

                if (mysqli_num_rows($search_design) <= 0) {
                    $mysqli->query("INSERT INTO player_designs (name, baseShipId, userId) VALUES ('ship_hammerclaw_design_hammerclaw-carbonite', 246, " .  $value['bidderId'] . ")");
                }
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'hammerclaw-bane':
        case 'hammerclaw-bane-c':
            if ($value['bidderId'] != 0) {
                $search_design = $mysqli->query("SELECT * FROM player_designs WHERE name='ship_hammerclaw_design_hammerclaw-bane' AND userId= " .  $value['bidderId'] . ";");

                if (mysqli_num_rows($search_design) <= 0) {
                    $mysqli->query("INSERT INTO player_designs (name, baseShipId, userId) VALUES ('ship_hammerclaw_design_hammerclaw-bane', 246, " .  $value['bidderId'] . ")");
                }
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'cyborg-carbonite':
        case 'cyborg-carbonite-c':
            if ($value['bidderId'] != 0) {
                $search_design = $mysqli->query("SELECT * FROM player_designs WHERE name='ship_cyborg_design_cyborg-carbonite' AND userId= " .  $value['bidderId'] . ";");

                if (mysqli_num_rows($search_design) <= 0) {
                    $mysqli->query("INSERT INTO player_designs (name, baseShipId, userId) VALUES ('ship_cyborg_design_cyborg-carbonite', 245, " .  $value['bidderId'] . ")");
                }
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
        case 'cyborg-sunstorm':
        case 'cyborg-sunstorm-c':
            if ($value['bidderId'] != 0) {
                $search_design = $mysqli->query("SELECT * FROM player_designs WHERE name='ship_cyborg_design_cyborg-sunstorm' AND userId= " .  $value['bidderId'] . ";");

                if (mysqli_num_rows($search_design) <= 0) {
                    $mysqli->query("INSERT INTO player_designs (name, baseShipId, userId) VALUES ('ship_cyborg_design_cyborg-sunstorm', 245, " .  $value['bidderId'] . ")");
                }
                /* Set Values */
                $mysqli->query("UPDATE auction_house SET bidderId = 0, bid = 0 WHERE name ='" . $value['name'] . "'");
                /* insert in winners */
                $mysqli->query("INSERT INTO auction_house_winners (itemName, userId, bid) VALUES ('" . $value['name'] . "'," . $value['bidderId'] . "," . $value['bid'] . ")");
            }
            break;
    }
}

$mysqli->close();
