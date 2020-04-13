<div class="header_standard" id="header_intern">
    
    <div id="header_branding">
        <img id="PartnerCobrandLogo" src="https://pit-835.bpsecure.com/published/cobrands/0_22_3.png">
    </div>
    
            <div id="header_ship" style="background-image: url(https://darkorbit-22.bpsecure.com/do_img/global/header/ships/model10.png)"></div>
                <a id="header_logo" href="#"></a>
        <div id="header_top_bar">
        <div id="header_top_id" class="header_top_item">
            <div class="header_item_wrapper">
                <img src="https://darkorbit-22.bpsecure.com/do_img/global/header/buttons/icon_stats_ID.png?__cv=a4bc90727a951c42f0901a307858ca00" width="16" height="13" alt="">
                <span><?php echo $player['userId']; ?></span>
            </div>
        </div>
        <div id="header_top_level" class="header_top_item">
            <div class="header_item_wrapper">
                <img src="https://darkorbit-22.bpsecure.com/do_img/global/header/buttons/icon_stats_lvl.png?__cv=b84d7d86e451fdfbaa2115080867b100" width="16" height="13" alt="">
                <span>. . .</span>
            </div>
        </div>
        <div id="header_top_hnr" class="header_top_item">
            <div class="header_item_wrapper">
                <img src="https://darkorbit-22.bpsecure.com/do_img/global/header/buttons/icon_stats_hon.png?__cv=7fdab834dd65f0860a51a616caa05800" width="16" height="13" alt="">
                <span><?php echo number_format($data->honor, 0, ',', '.'); ?></span>
            </div>
        </div>
        <div id="header_top_exp" class="header_top_item">
            <div class="header_item_wrapper">
                <img src="https://darkorbit-22.bpsecure.com/do_img/global/header/buttons/icon_stats_exp.png?__cv=e2d3b6193cbab9dd23d67638df826700" width="16" height="13" alt="">
                <span><?php echo number_format($data->experience, 0, ',', '.'); ?></span>
            </div>
        </div>
    </div>
    <div id="header_second_bar">
            <script type="text/javascript" src="https://darkorbit-22.bpsecure.com/js/externalDefault/lpInstances.js?__cv=bc29fb86413f0e5342b26a60a3b8c500"></script>
            <div id="header_button_home" onclick="do_redirect('/')"></div>
    
    
            <div id="header_button_logout" onclick="do_redirect('/api/logout')"></div>
            <div id="header_button_help" onclick="showHelp()"></div>
                <div id="header_button_account" onclick="do_redirect('#')"></div>
                                <a onclick="openExternal('#');" id="header_main_noPremium" style="background-image: url('https://darkorbit-22.bpsecure.com/do_img/en/header/adds/add_premium.png');"></a>
                    
    </div>
    
                                    
    <div id="header_main">
       
    
            <div id="hangar_slot_current"></div>
            <div id="hangar_slot_arrow"></div>
        
        <div id="header_main_left">
            <a class="header_std_btn header_lft_std" id="hangar_btn" href="/">
                <img src="https://darkorbit-22.bpsecure.com/do_img/en/text/header_hangar_lightestBlue_blue.gif" alt="">
            </a>
            <a class="header_std_btn header_lft_std" id="clan_btn" href="/">
                <img src="https://darkorbit-22.bpsecure.com/do_img/en/text/header_clan_lightestBlue_blue.gif" alt="">
            </a>
            <a class="header_std_btn header_lft_std" id="lab_btn" href="/">
                <img src="https://darkorbit-22.bpsecure.com/do_img/en/text/header_skylab_lightestBlue_blue.gif">
            </a>
            <a class="header_std_btn header_lft_email" id="mail_btn" href="/">
                <img src="https://darkorbit-22.bpsecure.com/do_img/en/text/nav_sub1_evoucher_voucher_long_lightestBlue_blue.gif">
            </a>
            <a class="header_big_btn header_lft_big" id="profile_btn" href="/">
                <img src="https://darkorbit-22.bpsecure.com/do_img/en/text/header_pilotsheet_lightestBlue_blue.gif">
            </a>
        </div>
    
        <div id="header_main_middle">
                        <div id="ip_placeholder"></div>
            <div id="header_start_btn">
                <img src="https://darkorbit-22.bpsecure.com/do_img/en/text/header_start_white_green.gif">
            </div>
        </div>
    
        <div id="header_main_right">
            <a class="header_std_btn header_rgt_std" id="shop_btn" href="/shop" alt="">
                                <!-- <img src="https://darkorbit-22.bpsecure.com/do_img/global/header/buttons/event_icon.png" width="21" height="21" id="header_event_icon"> -->
                            <img src="https://darkorbit-22.bpsecure.com/do_img/en/text/header_shop_lightestBlue_blue.gif" alt="">
            </a>
            <a class="header_std_btn header_rgt_std" id="uri_btn" href="/">
                            <img src="https://darkorbit-22.bpsecure.com/do_img/en/text/header_payment_lightestBlue_blue.gif">
            </a>
            <a class="header_std_btn header_rgt_std" id="trade_btn" href="/auctions">
                <img src="https://darkorbit-22.bpsecure.com/do_img/en/text/header_auction_lightestBlue_blue.gif">
                <p style="margin-top: 10px; color: #82d1ff; cursor: initial;">EventCoins: 0</p>
            </a>
            <a class="header_big_btn header_rgt_big" id="gg_btn" href="/">
                                <!-- <div id="header_icon_sale_gg"></div> -->
                                                    <img src="https://darkorbit-22.bpsecure.com/do_img/en/text/header_galaxygates_lightestBlue_blue.gif">
            </a>
                </div>
    
        
            <a id="header_new_mail" href="/indexInternal.es?action=internalMessaging">
                (0)
                        </a>
    
    </div>
    <div id="header_bottom">
        <img id="news_overlay_left" src="https://darkorbit-22.bpsecure.com/do_img/global/header/buttons/newsticker_gradient_left.png" width="123" height="26">
        <img id="news_overlay_right" src="https://darkorbit-22.bpsecure.com/do_img/global/header/buttons/newsticker_gradient_right.png" width="123" height="26">
        <div id="header_news_wrapper">
            <ul id="header_news_ticker" style="margin-left: -43.7px;">
                                                                
                                                                    <li id="header_news_item_SocialChannels" >
                            
    Play with your friends in our UBA system to get amazing rewards
                        </li>
                                
                        <li id="header_news_item_eventHonDay">
                            
    We have implemented the galaxy gates, now you can build and rank up!
                        </li>
                      </ul>
        </div>
        <div id="header_credits" class="header_money">
        <?php echo number_format($data->credits, 0, ',', '.'); ?>
        </div>
        <a id="header_uri" class="header_money" href="/indexInternal.es?action=internalPayment" onclick="openExternal('/?action=internalPaymentProxy&amp;req=0953eff30149bd5c49f17a0ba564095db10e9fdccf85a07291d3ec93ff23c4836a1cf754ca6ed2102acdd03cae5fc427256b22c9c25c732a3fdc27a7f56c3bbc32b8bce79cd51045f1803b5fa1e2445d&amp;v=d57d653f4c594db60036ded3db43ee57');">
        <?php echo number_format($data->uridium, 0, ',', '.'); ?>
    
        </a>
    </div>
    </div>