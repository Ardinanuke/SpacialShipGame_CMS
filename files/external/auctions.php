<?php
/*
    

    Proceso para el cronjob (Cada hora): 
    1. buscada cada objeto y al biddderId le otorga el item.
    2. Reinicia el bidderId y bid a sus valores vacios

    Proceso para el cronjob (Cada dia):     
    1. buscada cada objeto y al biddderId le otorga el item.
    2. Reinicia el bidderId y bid a sus valores vacios

    Proceso para el cronjob (potenciadores):
    - No implementado aun.

*/

/**
 * ----------------------------------
 * 
 * 
 * 
 *  EACH HOUR
 * 
 * 
 * ---------------------------------
 */


/* URIDIUM */

/*
if (isset($_POST['shd-b01']) && isset($_POST['shd-b01-bid'])) {
}

if (isset($_POST['hp-b01']) && isset($_POST['hp-b01-bid'])) {
} */
$mysqli = Database::GetInstance();
$player = Functions::GetPlayer();

$alert_succes = '';
$alert_error = '';
/* Proceso para pujar:
    1. Checar si la puja es mayor al bid que trae actualmente.

    casos:
     1. es menor o igual: Mostrar alerta "No es suficiente para pujar"
     2. Es mayor: Mostrar alerta "Puja correcta 'Reinicia la pagina'"
        - Devolverle la moneda al anterior bidder en caso de que haya alguno.
        - Reducirle la moneda al bidder   
        - Actualizar el bidderId y el bid del item.
         */
if (isset($_POST['havoc']) && isset($_POST['havoc-bid'])) {
    $havoc = $mysqli->query('SELECT * FROM auction_house WHERE name="havoc" ')->fetch_assoc();
    if ($_POST['havoc-bid'] > 0) {

        if ($havoc['bidderId'] == 0) {
            if ($data->uridium >= $_POST['havoc-bid']) {
                $restantU = ($data->uridium - $_POST['havoc-bid']);
                $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['havoc-bid'] . '" WHERE name="havoc"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->uridium >= $_POST['havoc-bid']) {
                if ($havoc['bidderId'] != $player['userId']) {
                    if ($_POST['havoc-bid'] > $havoc['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $havoc['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->uridium + $havoc['bid']);
                        $dataBidder = '{"uridium":' . $sumBid . ',"credits":' . json_decode($userBidder['data'])->credits . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $havoc['bidderId']);
                        /* Remove the bid to current user */
                        $restantU = ($data->uridium - $_POST['havoc-bid']);
                        $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['havoc-bid'] . '" WHERE name="havoc"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['havoc-bid'] . '" WHERE name="havoc"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

if (isset($_POST['hercules']) && isset($_POST['hercules-bid'])) {

    $hercules = $mysqli->query('SELECT * FROM auction_house WHERE name="hercules" ')->fetch_assoc();
    if ($_POST['hercules-bid'] > 0) {

        if ($hercules['bidderId'] == 0) {
            if ($data->uridium >= $_POST['hercules-bid']) {
                $restantU = ($data->uridium - $_POST['hercules-bid']);
                $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['hercules-bid'] . '" WHERE name="hercules"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->uridium >= $_POST['hercules-bid']) {
                if ($hercules['bidderId'] != $player['userId']) {
                    if ($_POST['hercules-bid'] > $hercules['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $hercules['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->uridium + $hercules['bid']);
                        $dataBidder = '{"uridium":' . $sumBid . ',"credits":' . json_decode($userBidder['data'])->credits . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $hercules['bidderId']);
                        /* Remove the bid to current user */
                        $restantU = ($data->uridium - $_POST['hercules-bid']);
                        $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['hercules-bid'] . '" WHERE name="hercules"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['hercules-bid'] . '" WHERE name="hercules"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

/* CREDITS */

/*
if (isset($_POST['shd-b01-c']) && isset($_POST['shd-b01-bid-c'])) {
}

if (isset($_POST['hp-b01-c']) && isset($_POST['hp-b01-bid-c'])) {
}
*/

if (isset($_POST['havoc-c']) && isset($_POST['havoc-bid-c'])) {
    $havoc = $mysqli->query('SELECT * FROM auction_house WHERE name="havoc-c" ')->fetch_assoc();
    if ($_POST['havoc-bid-c'] > 0) {

        if ($havoc['bidderId'] == 0) {
            if ($data->credits >= $_POST['havoc-bid-c']) {
                $restantC = ($data->credits  - $_POST['havoc-bid-c']);
                $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['havoc-bid-c'] . '" WHERE name="havoc-c"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->credits >= $_POST['havoc-bid-c']) {
                if ($havoc['bidderId'] != $player['userId']) {
                    if ($_POST['havoc-bid-c'] > $havoc['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $havoc['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->credits + $havoc['bid']);
                        $dataBidder = '{"uridium":' . json_decode($userBidder['data'])->uridium . ',"credits":' . $sumBid  . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $havoc['bidderId']);
                        /* Remove the bid to current user */
                        $restantC = ($data->credits  - $_POST['havoc-bid-c']);
                        $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['havoc-bid-c'] . '" WHERE name="havoc-c"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['havoc-bid-c'] . '" WHERE name="havoc-c"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

if (isset($_POST['hercules-c']) && isset($_POST['hercules-bid-c'])) {
    $hercules = $mysqli->query('SELECT * FROM auction_house WHERE name="hercules-c" ')->fetch_assoc();
    if ($_POST['hercules-bid-c'] > 0) {

        if ($hercules['bidderId'] == 0) {
            if ($data->credits >= $_POST['hercules-bid-c']) {
                $restantC = ($data->credits  - $_POST['hercules-bid-c']);
                $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['hercules-bid-c'] . '" WHERE name="hercules-c"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->credits >= $_POST['hercules-bid-c']) {
                if ($hercules['bidderId'] != $player['userId']) {
                    if ($_POST['hercules-bid-c'] > $hercules['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $hercules['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->credits + $hercules['bid']);
                        $dataBidder = '{"uridium":' . json_decode($userBidder['data'])->uridium . ',"credits":' . $sumBid  . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $hercules['bidderId']);
                        /* Remove the bid to current user */
                        $restantC = ($data->credits  - $_POST['hercules-bid-c']);
                        $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['hercules-bid-c'] . '" WHERE name="hercules-c"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['hercules-bid-c'] . '" WHERE name="hercules-c"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

/**
 * ----------------------------------
 * 
 * 
 * 
 *  DAILY
 * 
 * 
 * ---------------------------------
 */

/* uridium */

if (isset($_POST['diminisher-legend']) && isset($_POST['diminisher-legend-bid'])) {
    $diminisherLegend = $mysqli->query('SELECT * FROM auction_house WHERE name="diminisher-legend" ')->fetch_assoc();
    if ($_POST['diminisher-legend-bid'] > 0) {

        if ($diminisherLegend['bidderId'] == 0) {
            if ($data->uridium >= $_POST['diminisher-legend-bid']) {
                $restantU = ($data->uridium - $_POST['diminisher-legend-bid']);
                $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['diminisher-legend-bid'] . '" WHERE name="diminisher-legend"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->uridium >= $_POST['diminisher-legend-bid']) {
                if ($diminisherLegend['bidderId'] != $player['userId']) {
                    if ($_POST['diminisher-legend-bid'] > $diminisherLegend['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $diminisherLegend['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->uridium + $diminisherLegend['bid']);
                        $dataBidder = '{"uridium":' . $sumBid . ',"credits":' . json_decode($userBidder['data'])->credits . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $diminisherLegend['bidderId']);
                        /* Remove the bid to current user */
                        $restantU = ($data->uridium - $_POST['diminisher-legend-bid']);
                        $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['diminisher-legend-bid'] . '" WHERE name="diminisher-legend"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['diminisher-legend-bid'] . '" WHERE name="diminisher-legend"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

if (isset($_POST['diminisher-argon']) && isset($_POST['diminisher-argon-bid'])) {
    $diminisherArgon = $mysqli->query('SELECT * FROM auction_house WHERE name="diminisher-argon" ')->fetch_assoc();
    if ($_POST['diminisher-argon-bid'] > 0) {

        if ($diminisherArgon['bidderId'] == 0) {
            if ($data->uridium >= $_POST['diminisher-argon-bid']) {
                $restantU = ($data->uridium - $_POST['diminisher-argon-bid']);
                $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['diminisher-argon-bid'] . '" WHERE name="diminisher-argon"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->uridium >= $_POST['diminisher-argon-bid']) {
                if ($diminisherArgon['bidderId'] != $player['userId']) {
                    if ($_POST['diminisher-argon-bid'] > $diminisherArgon['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $diminisherArgon['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->uridium + $diminisherArgon['bid']);
                        $dataBidder = '{"uridium":' . $sumBid . ',"credits":' . json_decode($userBidder['data'])->credits . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $diminisherArgon['bidderId']);
                        /* Remove the bid to current user */
                        $restantU = ($data->uridium - $_POST['diminisher-argon-bid']);
                        $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['diminisher-argon-bid'] . '" WHERE name="diminisher-argon"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['diminisher-argon-bid'] . '" WHERE name="diminisher-argon"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

if (isset($_POST['sentinel-legend']) && isset($_POST['sentinel-legend-bid'])) {
    $sentinelLegend = $mysqli->query('SELECT * FROM auction_house WHERE name="sentinel-legend" ')->fetch_assoc();
    if ($_POST['sentinel-legend-bid'] > 0) {

        if ($sentinelLegend['bidderId'] == 0) {
            if ($data->uridium >= $_POST['sentinel-legend-bid']) {
                $restantU = ($data->uridium - $_POST['sentinel-legend-bid']);
                $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['sentinel-legend-bid'] . '" WHERE name="sentinel-legend"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->uridium >= $_POST['sentinel-legend-bid']) {
                if ($sentinelLegend['bidderId'] != $player['userId']) {
                    if ($_POST['sentinel-legend-bid'] > $sentinelLegend['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $sentinelLegend['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->uridium + $sentinelLegend['bid']);
                        $dataBidder = '{"uridium":' . $sumBid . ',"credits":' . json_decode($userBidder['data'])->credits . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $sentinelLegend['bidderId']);
                        /* Remove the bid to current user */
                        $restantU = ($data->uridium - $_POST['sentinel-legend-bid']);
                        $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['sentinel-legend-bid'] . '" WHERE name="sentinel-legend"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['sentinel-legend-bid'] . '" WHERE name="sentinel-legend"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

if (isset($_POST['sentinel-argon']) && isset($_POST['sentinel-argon-bid'])) {
    $sentinelArgon = $mysqli->query('SELECT * FROM auction_house WHERE name="sentinel-argon" ')->fetch_assoc();
    if ($_POST['sentinel-argon-bid'] > 0) {

        if ($sentinelArgon['bidderId'] == 0) {
            if ($data->uridium >= $_POST['sentinel-argon-bid']) {
                $restantU = ($data->uridium - $_POST['sentinel-argon-bid']);
                $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['sentinel-argon-bid'] . '" WHERE name="sentinel-argon"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->uridium >= $_POST['sentinel-argon-bid']) {
                if ($sentinelArgon['bidderId'] != $player['userId']) {
                    if ($_POST['sentinel-argon-bid'] > $sentinelArgon['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $sentinelArgon['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->uridium + $sentinelArgon['bid']);
                        $dataBidder = '{"uridium":' . $sumBid . ',"credits":' . json_decode($userBidder['data'])->credits . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $sentinelArgon['bidderId']);
                        /* Remove the bid to current user */
                        $restantU = ($data->uridium - $_POST['sentinel-argon-bid']);
                        $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['sentinel-argon-bid'] . '" WHERE name="sentinel-argon"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['sentinel-argon-bid'] . '" WHERE name="sentinel-argon"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

if (isset($_POST['spectrum-legend']) && isset($_POST['spectrum-legend-bid'])) {
    $spectrumLegend = $mysqli->query('SELECT * FROM auction_house WHERE name="spectrum-legend" ')->fetch_assoc();
    if ($_POST['spectrum-legend-bid'] > 0) {

        if ($spectrumLegend['bidderId'] == 0) {
            if ($data->uridium >= $_POST['spectrum-legend-bid']) {
                $restantU = ($data->uridium - $_POST['spectrum-legend-bid']);
                $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['spectrum-legend-bid'] . '" WHERE name="spectrum-legend"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->uridium >= $_POST['spectrum-legend-bid']) {
                if ($spectrumLegend['bidderId'] != $player['userId']) {
                    if ($_POST['spectrum-legend-bid'] > $spectrumLegend['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $spectrumLegend['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->uridium + $spectrumLegend['bid']);
                        $dataBidder = '{"uridium":' . $sumBid . ',"credits":' . json_decode($userBidder['data'])->credits . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $spectrumLegend['bidderId']);
                        /* Remove the bid to current user */
                        $restantU = ($data->uridium - $_POST['spectrum-legend-bid']);
                        $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['spectrum-legend-bid'] . '" WHERE name="spectrum-legend"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['spectrum-legend-bid'] . '" WHERE name="spectrum-legend"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

if (isset($_POST['spectrum-dusklight']) && isset($_POST['spectrum-dusklight-bid'])) {

    $spectrumDusklight = $mysqli->query('SELECT * FROM auction_house WHERE name="spectrum-dusklight" ')->fetch_assoc();
    if ($_POST['spectrum-dusklight-bid'] > 0) {

        if ($spectrumDusklight['bidderId'] == 0) {
            if ($data->uridium >= $_POST['spectrum-dusklight-bid']) {
                $restantU = ($data->uridium - $_POST['spectrum-dusklight-bid']);
                $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['spectrum-dusklight-bid'] . '" WHERE name="spectrum-dusklight"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->uridium >= $_POST['spectrum-dusklight-bid']) {
                if ($spectrumDusklight['bidderId'] != $player['userId']) {
                    if ($_POST['spectrum-dusklight-bid'] > $spectrumDusklight['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $spectrumDusklight['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->uridium + $spectrumDusklight['bid']);
                        $dataBidder = '{"uridium":' . $sumBid . ',"credits":' . json_decode($userBidder['data'])->credits . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $spectrumDusklight['bidderId']);
                        /* Remove the bid to current user */
                        $restantU = ($data->uridium - $_POST['spectrum-dusklight-bid']);
                        $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['spectrum-dusklight-bid'] . '" WHERE name="spectrum-dusklight"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['spectrum-dusklight-bid'] . '" WHERE name="spectrum-dusklight"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

/* credits */

if (isset($_POST['diminisher-legend-c']) && isset($_POST['diminisher-legend-bid-c'])) {

    $diminisherLegend = $mysqli->query('SELECT * FROM auction_house WHERE name="diminisher-legend-c" ')->fetch_assoc();
    if ($_POST['diminisher-legend-bid-c'] > 0) {

        if ($diminisherLegend['bidderId'] == 0) {
            if ($data->credits >= $_POST['diminisher-legend-bid-c']) {
                $restantC = ($data->credits - $_POST['diminisher-legend-bid-c']);
                $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['diminisher-legend-bid-c'] . '" WHERE name="diminisher-legend-c"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->credits >= $_POST['diminisher-legend-bid-c']) {
                if ($diminisherLegend['bidderId'] != $player['userId']) {
                    if ($_POST['diminisher-legend-bid-c'] > $diminisherLegend['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $diminisherLegend['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->credits + $diminisherLegend['bid']);
                        $dataBidder = '{"uridium":' . json_decode($userBidder['data'])->uridium . ',"credits":' . $sumBid . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $diminisherLegend['bidderId']);
                        /* Remove the bid to current user */
                        $restantC = ($data->credits - $_POST['diminisher-legend-bid-c']);
                        $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['diminisher-legend-bid-c'] . '" WHERE name="diminisher-legend-c"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['diminisher-legend-bid-c'] . '" WHERE name="diminisher-legend-c"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

if (isset($_POST['diminisher-argon-c']) && isset($_POST['diminisher-argon-bid-c'])) {
    $diminisherArgon = $mysqli->query('SELECT * FROM auction_house WHERE name="diminisher-argon-c" ')->fetch_assoc();
    if ($_POST['diminisher-argon-bid-c'] > 0) {

        if ($diminisherArgon['bidderId'] == 0) {
            if ($data->credits >= $_POST['diminisher-argon-bid-c']) {
                $restantC = ($data->credits - $_POST['diminisher-argon-bid-c']);
                $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['diminisher-argon-bid-c'] . '" WHERE name="diminisher-argon-c"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->credits >= $_POST['diminisher-argon-bid-c']) {
                if ($diminisherArgon['bidderId'] != $player['userId']) {
                    if ($_POST['diminisher-argon-bid-c'] > $diminisherArgon['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $diminisherArgon['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->credits + $diminisherArgon['bid']);
                        $dataBidder = '{"uridium":' . json_decode($userBidder['data'])->uridium . ',"credits":' . $sumBid . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $diminisherArgon['bidderId']);
                        /* Remove the bid to current user */
                        $restantC = ($data->credits - $_POST['diminisher-argon-bid-c']);
                        $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['diminisher-argon-bid-c'] . '" WHERE name="diminisher-argon-c"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['diminisher-argon-bid-c'] . '" WHERE name="diminisher-argon-c"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

if (isset($_POST['sentinel-legend-c']) && isset($_POST['sentinel-legend-bid-c'])) {
    $sentinelLegend = $mysqli->query('SELECT * FROM auction_house WHERE name="sentinel-legend-c" ')->fetch_assoc();
    if ($_POST['sentinel-legend-bid-c'] > 0) {

        if ($sentinelLegend['bidderId'] == 0) {
            if ($data->credits >= $_POST['sentinel-legend-bid-c']) {
                $restantC = ($data->credits - $_POST['sentinel-legend-bid-c']);
                $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['sentinel-legend-bid-c'] . '" WHERE name="sentinel-legend-c"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->credits >= $_POST['sentinel-legend-bid-c']) {
                if ($sentinelLegend['bidderId'] != $player['userId']) {
                    if ($_POST['sentinel-legend-bid-c'] > $sentinelLegend['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $sentinelLegend['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->credits + $sentinelLegend['bid']);
                        $dataBidder = '{"uridium":' . json_decode($userBidder['data'])->uridium . ',"credits":' . $sumBid . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $sentinelLegend['bidderId']);
                        /* Remove the bid to current user */
                        $restantC = ($data->credits - $_POST['sentinel-legend-bid-c']);
                        $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['sentinel-legend-bid-c'] . '" WHERE name="sentinel-legend-c"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['sentinel-legend-bid-c'] . '" WHERE name="sentinel-legend-c"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

if (isset($_POST['sentinel-argon-c']) && isset($_POST['sentinel-argon-bid-c'])) {

    $sentinelArgon = $mysqli->query('SELECT * FROM auction_house WHERE name="sentinel-argon-c" ')->fetch_assoc();
    if ($_POST['sentinel-argon-bid-c'] > 0) {

        if ($sentinelArgon['bidderId'] == 0) {
            if ($data->credits >= $_POST['sentinel-argon-bid-c']) {
                $restantC = ($data->credits - $_POST['sentinel-argon-bid-c']);
                $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['sentinel-argon-bid-c'] . '" WHERE name="sentinel-argon-c"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->credits >= $_POST['sentinel-argon-bid-c']) {
                if ($sentinelArgon['bidderId'] != $player['userId']) {
                    if ($_POST['sentinel-argon-bid-c'] > $sentinelArgon['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $sentinelArgon['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->credits + $sentinelArgon['bid']);
                        $dataBidder = '{"uridium":' . json_decode($userBidder['data'])->uridium . ',"credits":' . $sumBid . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $sentinelArgon['bidderId']);
                        /* Remove the bid to current user */
                        $restantC = ($data->credits - $_POST['sentinel-argon-bid-c']);
                        $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['sentinel-argon-bid-c'] . '" WHERE name="sentinel-argon-c"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['sentinel-argon-bid-c'] . '" WHERE name="sentinel-argon-c"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

if (isset($_POST['spectrum-legend-c']) && isset($_POST['spectrum-legend-bid-c'])) {
    $spectrumLegend = $mysqli->query('SELECT * FROM auction_house WHERE name="spectrum-legend-c" ')->fetch_assoc();
    if ($_POST['spectrum-legend-bid-c'] > 0) {

        if ($spectrumLegend['bidderId'] == 0) {
            if ($data->credits >= $_POST['spectrum-legend-bid-c']) {
                $restantC = ($data->credits - $_POST['spectrum-legend-bid-c']);
                $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['spectrum-legend-bid-c'] . '" WHERE name="spectrum-legend-c"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->credits >= $_POST['spectrum-legend-bid-c']) {
                if ($spectrumLegend['bidderId'] != $player['userId']) {
                    if ($_POST['spectrum-legend-bid-c'] > $spectrumLegend['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $spectrumLegend['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->credits + $spectrumLegend['bid']);
                        $dataBidder = '{"uridium":' . json_decode($userBidder['data'])->uridium . ',"credits":' . $sumBid . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $spectrumLegend['bidderId']);
                        /* Remove the bid to current user */
                        $restantC = ($data->credits - $_POST['spectrum-legend-bid-c']);
                        $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['spectrum-legend-bid-c'] . '" WHERE name="spectrum-legend-c"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['spectrum-legend-bid-c'] . '" WHERE name="spectrum-legend-c"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}

if (isset($_POST['spectrum-dusklight-c']) && isset($_POST['spectrum-dusklight-bid-c'])) {

    $spectrumDusklight = $mysqli->query('SELECT * FROM auction_house WHERE name="spectrum-dusklight-c" ')->fetch_assoc();
    if ($_POST['spectrum-dusklight-bid-c'] > 0) {

        if ($spectrumDusklight['bidderId'] == 0) {
            if ($data->credits >= $_POST['spectrum-dusklight-bid-c']) {
                $restantC = ($data->credits - $_POST['spectrum-dusklight-bid-c']);
                $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['spectrum-dusklight-bid-c'] . '" WHERE name="spectrum-dusklight-c"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->credits >= $_POST['spectrum-dusklight-bid-c']) {
                if ($spectrumDusklight['bidderId'] != $player['userId']) {
                    if ($_POST['spectrum-dusklight-bid-c'] > $spectrumDusklight['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $spectrumDusklight['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->credits + $spectrumDusklight['bid']);
                        $dataBidder = '{"uridium":' . json_decode($userBidder['data'])->uridium . ',"credits":' . $sumBid . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $spectrumDusklight['bidderId']);
                        /* Remove the bid to current user */
                        $restantC = ($data->credits - $_POST['spectrum-dusklight-bid-c']);
                        $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['spectrum-dusklight-bid-c'] . '" WHERE name="spectrum-dusklight-c"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['spectrum-dusklight-bid-c'] . '" WHERE name="spectrum-dusklight-c"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}
/* PET Uridium */
if (isset($_POST['pet']) && isset($_POST['pet-bid'])) {
    $pet = $mysqli->query('SELECT * FROM auction_house WHERE name="pet" ')->fetch_assoc();
    if ($_POST['pet-bid'] > 0) {

        if ($pet['bidderId'] == 0) {
            if ($data->uridium >= $_POST['pet-bid']) {
                $restantU = ($data->uridium - $_POST['pet-bid']);
                $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['pet-bid'] . '" WHERE name="pet"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->uridium >= $_POST['pet-bid']) {
                if ($pet['bidderId'] != $player['userId']) {
                    if ($_POST['pet-bid'] > $pet['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $pet['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->uridium + $pet['bid']);
                        $dataBidder = '{"uridium":' . $sumBid . ',"credits":' . json_decode($userBidder['data'])->credits . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $pet['bidderId']);
                        /* Remove the bid to current user */
                        $restantU = ($data->uridium - $_POST['pet-bid']);
                        $playerBidder = '{"uridium":' . $restantU . ',"credits":' . $data->credits . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['pet-bid'] . '" WHERE name="pet"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['pet-bid'] . '" WHERE name="pet"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}
/* PET credits */

if (isset($_POST['pet-c']) && isset($_POST['pet-bid-c'])) {

    $petC = $mysqli->query('SELECT * FROM auction_house WHERE name="pet-c" ')->fetch_assoc();
    if ($_POST['pet-bid-c'] > 0) {

        if ($petC['bidderId'] == 0) {
            if ($data->credits >= $_POST['pet-bid-c']) {
                $restantC = ($data->credits - $_POST['pet-bid-c']);
                $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['pet-bid-c'] . '" WHERE name="pet-c"');
                $alert_succes = 'Correct bid! Please reload the page';
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        } else {
            if ($data->credits >= $_POST['pet-bid-c']) {
                if ($petC['bidderId'] != $player['userId']) {
                    if ($_POST['pet-bid-c'] > $petC['bid']) {
                        /* Return the coins to user */
                        $userBidder = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $petC['bidderId'])->fetch_assoc();
                        $sumBid = (json_decode($userBidder['data'])->credits + $petC['bid']);
                        $dataBidder = '{"uridium":' . json_decode($userBidder['data'])->uridium . ',"credits":' . $sumBid . ',"honor":' . json_decode($userBidder['data'])->honor . ',"experience":' . json_decode($userBidder['data'])->experience . ',"jackpot":' . json_decode($userBidder['data'])->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $dataBidder . "' WHERE userId=" . $petC['bidderId']);
                        /* Remove the bid to current user */
                        $restantC = ($data->credits - $_POST['pet-bid-c']);
                        $playerBidder = '{"uridium":' . $data->uridium . ',"credits":' . $restantC . ',"honor":' . $data->honor . ',"experience":' . $data->experience . ',"jackpot":' . $data->jackpot . '}';
                        $mysqli->query("UPDATE player_accounts SET data='" . $playerBidder . "' WHERE userId=" . $player['userId']);
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['pet-bid-c'] . '" WHERE name="pet-c"');
                        /* set data of the auction house*/
                        $mysqli->query('UPDATE auction_house SET bidderId=' . $player['userId'] . ', bid="' . $_POST['pet-bid-c'] . '" WHERE name="pet-c"');
                        $alert_succes = 'Correct bid! Please reload the page';
                    } else {
                        $alert_error = "you don't have enough money to bid";
                    }
                } else {
                    $alert_error = "You already have an active bid for this Item";
                }
            } else {
                $alert_error = "you don't have enough money to bid";
            }
        }
    } else {
        $alert_error = "error, it is not an acceptable amount";
    }
}
require_once(INCLUDES . 'header.php'); ?>
<style>
    body {
        font-family: Arial;
    }

    /* Style the tab */
    .tab {
        overflow: hidden;
        border-radius: 10px;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
        color: white;

    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #2f2f2f;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #2f2f2f;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 10px;
        border-top: none;
    }

    .container_t_auction {
        margin-top: auto;
        margin-bottom: auto;
        padding-left: 30px;
        text-align: left;
    }
</style>
<div id="main">
    <div class="container">
        <div class="row">
            <?php require_once(INCLUDES . 'data.php'); ?>
            <div class="card white-text grey darken-4 padding-15">
                <h5 style="font-weight: bold;">Auctions</h5>
                <?php

                if ($alert_error != '') { ?>
                    <div class="w3-panel w3-red">
                        <br>
                        <p><?php echo $alert_error; ?></p>
                        <br>
                    </div>
                <?php
                }
                if ($alert_succes != '') { ?>
                    <div class="w3-panel w3-green">
                        <br>
                        <p><?php echo $alert_succes; ?></p>
                        <br>
                    </div>
                <?php
                }
                ?>



                <div class="tab  white-text grey darken-3">
                    <button class="tablinks" onclick="openCity(event, 'hour')">Each hour</button>
                    <button class="tablinks" onclick="openCity(event, 'day')">Daily</button>
                    <!-- 
                    <button class="tablinks" onclick="openCity(event, 'winhour')">Winners each hour</button>
                    <button class="tablinks" onclick="openCity(event, 'winday')">Winners daily</button> -->
                </div>

                <div id="hour" class="tabcontent">
                    <div class="countdown">
                        <p class="timer">
                            <strong>Time remaining: </strong>
                            <span id="minutes"></span> Minute(s)
                            <span id="seconds"></span> Second(s)
                        </p>
                    </div>
                    <div class="custom_data">
                        <div class="col-3" style="margin-right: 7em;">
                            Item
                        </div>
                        <div class="col-3">
                            Bidder
                        </div>
                        <div class="col-3">
                            Bid
                        </div>
                        <div class="col-3">
                            Your Bid
                        </div>
                    </div>
                    <br>
                    <p>Uridium:</p>
                    <!-- DONE 
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex;  width: 300px;">
                            <img src="do_img/global/items/booster_shd-b01_100x100.png" width="50px">
                            <div class="container_t_auction">
                                <strong>SHD-B01</strong>
                                <p>+25% Shield Booster 10 hours</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="text" name="shd-b01-bid" id="shd-b01-bid" placeholder="1.000.000 U." style="color:white;">
                                <input type="text" name="shd-b01" id="shd-b01" value="shd-b01" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div> -->
                    <!-- DONE 
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="do_img/global/items/booster_hp-b01_100x100.png" width="50px">
                            <div class="container_t_auction">
                                <strong>HP-B01</strong>
                                <p>+10% Dmg Booster 10 hours </p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="text" name="dmg-b01-bid" id="dmg-b01-bid" placeholder="1.000.000 U." style="color:white;">
                                <input type="text" name="dmg-b01" id="dmg-b01" value="dmg-b01" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>-->
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/drone/designs/havoc_63x63.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Havoc</strong>
                                <p>10% DMG (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $havoc = $mysqli->query('SELECT * FROM auction_house WHERE name="havoc" ')->fetch_assoc();
                                    if ($havoc['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_havoc = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $havoc['bidderId'])->fetch_assoc();
                                        echo $user_havoc['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($havoc['bid'], 0, ',', '.'); ?> U.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="havoc-bid" id="havoc-bid" placeholder="1.000.000 U." style="color:white;">
                                <input type="text" name="havoc" id="havoc" value="havoc" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/drone/designs/hercules_63x63.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Hercules</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $hercules = $mysqli->query('SELECT * FROM auction_house WHERE name="hercules" ')->fetch_assoc();
                                    if ($hercules['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_hercules = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $hercules['bidderId'])->fetch_assoc();
                                        echo $user_hercules['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($hercules['bid'], 0, ',', '.'); ?> U.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="hercules-bid" id="hercules-bid" placeholder="1.000.000 U." style="color:white;">
                                <input type="text" name="hercules" id="hercules" value="hercules" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p>Credits:</p>
                    <!-- DONE 
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex;  width: 300px;">
                            <img src="do_img/global/items/booster_shd-b01_100x100.png" width="50px">
                            <div class="container_t_auction">
                                <strong>SHD-B01</strong>
                                <p>+25% Shield Booster 10 hours</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="text" name="shd-b01-bid-c" id="shd-b01-bid-c" placeholder="1.000.000 U." style="color:white;">
                                <input type="text" name="shd-b01-c" id="shd-b01-c" value="shd-b01-c" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>-->
                    <!-- DONE 
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="do_img/global/items/booster_dmg-b01_100x100.png" width="50px">
                            <div class="container_t_auction">
                                <strong>DMG-B01</strong>
                                <p>+10% Dmg Booster 10 hours </p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="text" name="dmg-b01-bid-c" id="dmg-b01-bid-c" placeholder="1.000.000 U." style="color:white;">
                                <input type="text" name="dmg-b01-c" id="dmg-b01-c" value="dmg-b01-c" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>-->
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/drone/designs/havoc_63x63.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Havoc</strong>
                                <p>10% DMG (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $havocC = $mysqli->query('SELECT * FROM auction_house WHERE name="havoc-c" ')->fetch_assoc();
                                    if ($havocC['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_havocC = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $havocC['bidderId'])->fetch_assoc();
                                        echo $user_havocC['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($havocC['bid'], 0, ',', '.'); ?> C.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="havoc-bid-c" id="havoc-bid-c" placeholder="1.000.000 C." style="color:white;">
                                <input type="text" name="havoc-c" id="havoc-c" value="havoc-c" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/drone/designs/hercules_63x63.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Hercules</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $herculesC = $mysqli->query('SELECT * FROM auction_house WHERE name="hercules-c" ')->fetch_assoc();
                                    if ($herculesC['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_herculesC = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $herculesC['bidderId'])->fetch_assoc();
                                        echo $user_herculesC['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($herculesC['bid'], 0, ',', '.'); ?> C.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="hercules-bid-c" id="hercules-bid-c" placeholder="1.000.000 C." style="color:white;">
                                <input type="text" name="hercules-c" id="hercules-c" value="hercules-c" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="day" class="tabcontent">
                    <div class="countdown2">
                        <p class="timer2">
                            <strong>Time remaining: </strong>
                            <span id="hours"></span> Hour(s)
                            <span id="minutes2"></span> Minute(s)
                            <span id="seconds2"></span> Second(s)
                        </p>
                    </div>
                    <div class="custom_data">
                        <div class="col-3" style="margin-right: 7em;">
                            Item
                        </div>
                        <div class="col-3">
                            Bidder
                        </div>
                        <div class="col-3">
                            Bid
                        </div>
                        <div class="col-3">
                            Your Bid
                        </div>
                    </div>
                    <br>
                    <p>Uridium:</p>
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/diminisher-legend_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Diminisher Legend</strong>
                                <p>Goliath design</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $diminisherLegend = $mysqli->query('SELECT * FROM auction_house WHERE name="diminisher-legend" ')->fetch_assoc();
                                    if ($diminisherLegend['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_diminisherLegend = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $diminisherLegend['bidderId'])->fetch_assoc();
                                        echo $user_diminisherLegend['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($diminisherLegend['bid'], 0, ',', '.'); ?> U.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="diminisher-legend-bid" id="diminisher-legend-bid" placeholder="1.000.000 U." style="color:white;">
                                <input type="text" name="diminisher-legend" id="diminisher-legend" value="diminisher-legend" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/diminisher-argon_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Diminisher Argon</strong>
                                <p>Goliath design</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $diminisherArgon = $mysqli->query('SELECT * FROM auction_house WHERE name="diminisher-argon" ')->fetch_assoc();
                                    if ($diminisherArgon['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_diminisherArgon = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $diminisherArgon['bidderId'])->fetch_assoc();
                                        echo $user_diminisherArgon['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($diminisherArgon['bid'], 0, ',', '.'); ?> U.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="diminisher-argon-bid" id="diminisher-argon-bid" placeholder="1.000.000 U." style="color:white;">
                                <input type="text" name="diminisher-argon" id="diminisher-argon" value="diminisher-argon" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/sentinel-legend_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Sentinel Legend</strong>
                                <p>Goliath design</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $sentinelLegend = $mysqli->query('SELECT * FROM auction_house WHERE name="sentinel-legend" ')->fetch_assoc();
                                    if ($sentinelLegend['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_sentinelLegend = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $sentinelLegend['bidderId'])->fetch_assoc();
                                        echo $user_sentinelLegend['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($sentinelLegend['bid'], 0, ',', '.'); ?> U.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="sentinel-legend-bid" id="sentinel-legend-bid" placeholder="1.000.000 U." style="color:white;">
                                <input type="text" name="sentinel-legend" id="sentinel-legend" value="sentinel-legend" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/sentinel-argon_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Sentinel Argon</strong>
                                <p>Goliath design</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $sentinelArgon = $mysqli->query('SELECT * FROM auction_house WHERE name="sentinel-argon" ')->fetch_assoc();
                                    if ($sentinelArgon['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_sentinelArgon = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $sentinelArgon['bidderId'])->fetch_assoc();
                                        echo $user_sentinelArgon['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($sentinelArgon['bid'], 0, ',', '.'); ?> U.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="sentinel-argon-bid" id="sentinel-argon-bid" placeholder="1.000.000 U." style="color:white;">
                                <input type="text" name="sentinel-argon" id="sentinel-argon" value="sentinel-argon" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/spectrum-legend_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Spectrum Legend</strong>
                                <p>Goliath design</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $spectrumLegend = $mysqli->query('SELECT * FROM auction_house WHERE name="spectrum-legend" ')->fetch_assoc();
                                    if ($spectrumLegend['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_spectrumLegend = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $spectrumLegend['bidderId'])->fetch_assoc();
                                        echo $user_spectrumLegend['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($spectrumLegend['bid'], 0, ',', '.'); ?> U.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="spectrum-legend-bid" id="spectrum-legend-bid" placeholder="1.000.000 U." style="color:white;">
                                <input type="text" name="spectrum-legend" id="spectrum-legend" value="spectrum-legend" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/spectrum-dusklight_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Spectrum Dusklight</strong>
                                <p>Goliath design</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $spectrumDusklight = $mysqli->query('SELECT * FROM auction_house WHERE name="spectrum-dusklight" ')->fetch_assoc();
                                    if ($spectrumDusklight['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_spectrumDusklight = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $spectrumDusklight['bidderId'])->fetch_assoc();
                                        echo $user_spectrumDusklight['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($spectrumDusklight['bid'], 0, ',', '.'); ?> U.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="spectrum-dusklight-bid" id="spectrum-dusklight-bid" placeholder="1.000.000 U." style="color:white;">
                                <input type="text" name="spectrum-dusklight" id="spectrum-dusklight" value="spectrum-dusklight" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/pet/pet10_63x63.png" width="50px">
                            <div class="container_t_auction">
                                <strong>P.E.T. 15</strong>
                                <p>Advanced robotic</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $pet = $mysqli->query('SELECT * FROM auction_house WHERE name="pet" ')->fetch_assoc();
                                    if ($pet['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_pet = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $pet['bidderId'])->fetch_assoc();
                                        echo $user_pet['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($pet['bid'], 0, ',', '.'); ?> U.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="pet-bid" id="pet-bid" placeholder="1.000.000 U." style="color:white;">
                                <input type="text" name="pet" id="pet" value="pet" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p>Credits:</p>
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/diminisher-legend_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Diminisher Legend</strong>
                                <p>Goliath design</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $diminisherLegend = $mysqli->query('SELECT * FROM auction_house WHERE name="diminisher-legend-c" ')->fetch_assoc();
                                    if ($diminisherLegend['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_diminisherLegend = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $diminisherLegend['bidderId'])->fetch_assoc();
                                        echo $user_diminisherLegend['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($diminisherLegend['bid'], 0, ',', '.'); ?> C.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="diminisher-legend-bid-c" id="diminisher-legend-bid-c" placeholder="1.000.000 C." style="color:white;">
                                <input type="text" name="diminisher-legend-c" id="diminisher-legend-c" value="diminisher-legend-c" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/diminisher-argon_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Diminisher Argon</strong>
                                <p>Goliath design</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $diminisherArgon = $mysqli->query('SELECT * FROM auction_house WHERE name="diminisher-argon-c" ')->fetch_assoc();
                                    if ($diminisherArgon['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_diminisherArgon = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $diminisherArgon['bidderId'])->fetch_assoc();
                                        echo $user_diminisherArgon['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($diminisherArgon['bid'], 0, ',', '.'); ?> C.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="diminisher-argon-bid-c" id="diminisher-argon-bid-c" placeholder="1.000.000 C." style="color:white;">
                                <input type="text" name="diminisher-argon-c" id="diminisher-argon-c" value="diminisher-argon-c" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/sentinel-legend_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Sentinel Legend</strong>
                                <p>Goliath design</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $sentinelLegend = $mysqli->query('SELECT * FROM auction_house WHERE name="sentinel-legend-c" ')->fetch_assoc();
                                    if ($sentinelLegend['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_sentinelLegend = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $sentinelLegend['bidderId'])->fetch_assoc();
                                        echo $user_sentinelLegend['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($sentinelLegend['bid'], 0, ',', '.'); ?> C.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="sentinel-legend-bid-c" id="sentinel-legend-bid-c" placeholder="1.000.000 C." style="color:white;">
                                <input type="text" name="sentinel-legend-c" id="sentinel-legend-c" value="sentinel-legend-c" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/sentinel-argon_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Sentinel Argon</strong>
                                <p>Goliath design</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $sentinelArgon = $mysqli->query('SELECT * FROM auction_house WHERE name="sentinel-argon-c" ')->fetch_assoc();
                                    if ($sentinelArgon['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_sentinelArgon = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $sentinelArgon['bidderId'])->fetch_assoc();
                                        echo $user_sentinelArgon['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($sentinelArgon['bid'], 0, ',', '.'); ?> C.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="sentinel-argon-bid-c" id="sentinel-argon-bid-c" placeholder="1.000.000 C." style="color:white;">
                                <input type="text" name="sentinel-argon-c" id="sentinel-argon-c" value="sentinel-argon-c" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- DONE -->
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/spectrum-legend_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Spectrum Legend</strong>
                                <p>Goliath design</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $spectrumLegend = $mysqli->query('SELECT * FROM auction_house WHERE name="spectrum-legend-c" ')->fetch_assoc();
                                    if ($spectrumLegend['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_spectrumLegend = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $spectrumLegend['bidderId'])->fetch_assoc();
                                        echo $user_spectrumLegend['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($spectrumLegend['bid'], 0, ',', '.'); ?> C.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="spectrum-legend-bid-c" id="spectrum-legend-bid-c" placeholder="1.000.000 C." style="color:white;">
                                <input type="text" name="spectrum-legend-c" id="spectrum-legend-c" value="spectrum-legend-c" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/spectrum-dusklight_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Spectrum Dusklight</strong>
                                <p>Goliath design</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $spectrumDusklight = $mysqli->query('SELECT * FROM auction_house WHERE name="spectrum-dusklight-c" ')->fetch_assoc();
                                    if ($spectrumDusklight['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_spectrumDusklight = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $spectrumDusklight['bidderId'])->fetch_assoc();
                                        echo $user_spectrumDusklight['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($spectrumDusklight['bid'], 0, ',', '.'); ?> C.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="spectrum-dusklight-bid-c" id="spectrum-dusklight-bid-c" placeholder="1.000.000 C." style="color:white;">
                                <input type="text" name="spectrum-dusklight-c" id="spectrum-dusklight-c" value="spectrum-dusklight-c" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                     <!-- DONE -->
                     <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/pet/pet10_63x63.png" width="50px">
                            <div class="container_t_auction">
                                <strong>P.E.T. 15</strong>
                                <p>Advanced robotic</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong><?php
                                    $petC = $mysqli->query('SELECT * FROM auction_house WHERE name="pet-c" ')->fetch_assoc();
                                    if ($petC['bid'] == 0) {
                                        echo "- - -";
                                    } else {
                                        $user_petC = $mysqli->query('SELECT * FROM player_accounts WHERE userId=' . $petC['bidderId'])->fetch_assoc();
                                        echo $user_petC['pilotName'];
                                    }

                                    ?></strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            <?php echo number_format($petC['bid'], 0, ',', '.'); ?> C.
                        </div>
                        <div class="container_t_auction" style=" margin-left: auto; margin-right: auto;">
                            <form action="" method="post" style="display: flex;">
                                <input type="number" name="pet-bid-c" id="pet-bid-c" placeholder="1.000.000 C." style="color:white;">
                                <input type="text" name="pet-c" id="pet-c" value="pet-c" style="position: absolute; visibility: hidden;">
                                <div class="container_t_auction">
                                    <button class="btn grey darken-2">Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        if (evt != null) {
            evt.currentTarget.className += " active";
        }
    }


    function countdown(endDate) {
        let days, hours, minutes, seconds;

        endDate = new Date(endDate).getTime();

        if (isNaN(endDate)) {
            return;
        }

        setInterval(calculate, 1000);

        function calculate() {

            let startDate = new Date().getTime(); /* we only need change the start date */
            startDate.toLocaleString("es-MX"); /* Time of Mexico */

            let today = new Date();
            today.toLocaleString("es-MX");
            let endDate2 = new Date(today.getFullYear(), today.getMonth(), today.getDate(), today.getHours(), 59, 60);
            console.log(endDate2);

            let timeRemaining = parseInt((endDate2 - startDate) / 1000);


            if (timeRemaining >= 0) {
                days = parseInt(timeRemaining / 86400);
                timeRemaining = (timeRemaining % 86400);

                hours = parseInt(timeRemaining / 3600);
                timeRemaining = (timeRemaining % 3600);

                minutes = parseInt(timeRemaining / 60);
                timeRemaining = (timeRemaining % 60);

                seconds = parseInt(timeRemaining);

                document.getElementById("minutes").innerHTML = minutes < 10 ? "0" + minutes : minutes;
                document.getElementById("seconds").innerHTML = seconds < 10 ? "0" + seconds : seconds;
            } else {
                return;
            }
        }
    }

    function countdown2(endDate) {
        let days, hours, minutes, seconds;

        endDate = new Date(endDate).getTime();

        if (isNaN(endDate)) {
            return;
        }

        setInterval(calculate, 1000);

        function calculate() {

            let startDate = new Date().getTime(); /* we only need change the start date */
            startDate.toLocaleString("es-MX"); /* Time of Mexico */

            let today = new Date();
            today.toLocaleString("es-MX");
            let endDate2 = new Date(today.getFullYear(), today.getMonth(), today.getDate(), 23, 59, 60);
            console.log(endDate2);

            let timeRemaining = parseInt((endDate2 - startDate) / 1000);


            if (timeRemaining >= 0) {
                days = parseInt(timeRemaining / 86400);
                timeRemaining = (timeRemaining % 86400);

                hours = parseInt(timeRemaining / 3600);
                timeRemaining = (timeRemaining % 3600);

                minutes = parseInt(timeRemaining / 60);
                timeRemaining = (timeRemaining % 60);

                seconds = parseInt(timeRemaining);

                document.getElementById("hours").innerHTML = hours < 10 ? "0" + hours : hours;
                document.getElementById("minutes2").innerHTML = minutes < 10 ? "0" + minutes : minutes;
                document.getElementById("seconds2").innerHTML = seconds < 10 ? "0" + seconds : seconds;
            } else {
                return;
            }
        }
    }

    (function() {
        /* mm / dd / yy */
        countdown('03/05/2020 07:00:00 AM');
    }());

    (function() {
        /* mm / dd / yy */
        countdown2('03/05/2020 07:00:00 AM');
    }());

    (function() {
        openCity(null, 'hour'); /* London */
    }());
</script>

<?php require_once(INCLUDES . 'footer.php'); ?>