<div class="custom_data">
  <div class="col-3">
    Uridium: <span id="uridium"><?php echo number_format($data->uridium, 0, ',', '.'); ?></span>
  </div>
  <div class="col-3">
    Credits: <span id="credits"><?php echo number_format($data->credits, 0, ',', '.'); ?></span>
  </div>
  <div class="col-3">
    Honor: <span><?php echo number_format($data->honor, 0, ',', '.'); ?></span>
  </div>
  <div class="col-3">
    Experience: <span><?php echo number_format($data->experience, 0, ',', '.'); ?></span>
  </div>
  <div class="col-3">
    Event Coins: <span><?php

                        $search_event_coins = $mysqli->query("SELECT * FROM event_coins WHERE userId = " . $player['userId'] . ";");
                        if (mysqli_num_rows($search_event_coins) > 0) {
                          $current_coins = $search_event_coins->fetch_assoc();
                          echo $current_coins['coins'];
                        } else {
                          echo "0";
                        }
                        ?></span>
  </div>
</div>