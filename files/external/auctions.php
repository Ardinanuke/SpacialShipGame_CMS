<?php
/*
    Proceso para pujar:
    1. Checar si la puja es mayor al bid que trae actualmente.

    casos:
     1. es menor o igual: Mostrar alerta "No es suficiente para pujar"
     2. Es mayor: Mostrar alerta "Puja correcta 'Reinicia la pagina'"
        - Reducirle la moneda al bidder   
        - Devolverle la mena al anterior bidder en caso de que haya alguno.
        - Actualizar el bidderId y el bid del item.
        

    Proceso para el cronjob (Cada hora): 
    1. buscada cada objeto y al biddderId le otorga el item.
    2. Reinicia el bidderId y bid a sus valores vacios

    Proceso para el cronjob (Cada dia):     
    1. buscada cada objeto y al biddderId le otorga el item.
    2. Reinicia el bidderId y bid a sus valores vacios

    Proceso para el cronjob (potenciadores):

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

if (isset($_POST['shd-b01']) && isset($_POST['shd-b01-bid'])) {
    /* to do */
}

if (isset($_POST['dmg-b01']) && isset($_POST['dmg-b01-bid'])) {
    /* to do */
}

if (isset($_POST['havoc']) && isset($_POST['havoc'])) {
    /* to do */
}

if (isset($_POST['hercules']) && isset($_POST['hercules'])) {
    /* to do */
}

/* CREDITS */

if (isset($_POST['shd-b01-c']) && isset($_POST['shd-b01-bid-c'])) {
    /* to do */
}

if (isset($_POST['dmg-b01-c']) && isset($_POST['dmg-b01-bid-c'])) {
    /* to do */
}

if (isset($_POST['havoc-c']) && isset($_POST['havoc-c'])) {
    /* to do */
}

if (isset($_POST['hercules-c']) && isset($_POST['hercules-c'])) {
    /* to do */
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


 
 if (isset($_POST['dimisher-legend']) && isset($_POST['dimisher-legend'])) {
    /* to do */
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
                <div class="tab  white-text grey darken-3">
                    <button class="tablinks" onclick="openCity(event, 'London')">Each hour</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">Daily</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">Winners each hour</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">Winners daily</button>
                </div>

                <div id="London" class="tabcontent">
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
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex;  width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/booster_shd-b01_100x100.png" width="50px">
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
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/booster_dmg-b01_100x100.png" width="50px">
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
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 U." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/drone/designs/havoc_63x63.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Havoc</strong>
                                <p>10% DMG (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 U." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/drone/designs/hercules_63x63.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Hercules</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 U." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <p>Credits:</p>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex;  width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/booster_shd-b01_100x100.png" width="50px">
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
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 C." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/booster_dmg-b01_100x100.png" width="50px">
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
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 C." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/drone/designs/havoc_63x63.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Havoc</strong>
                                <p>10% DMG (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 C." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/drone/designs/hercules_63x63.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Hercules</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 C." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Paris" class="tabcontent">
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
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/diminisher-legend_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Diminisher Legend</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 U." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/diminisher-argon_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Diminisher Argon</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 U." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/sentinel-legend_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Sentinel Legend</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 U." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/sentinel-argon_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Sentinel Argon</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 U." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/spectrum-legend_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Spectrum Legend</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 U." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/spectrum-dusklight_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Spectrum Dusklight</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 U." style="color:white;" style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <p>Credits:</p>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/diminisher-legend_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Diminisher Legend</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 C." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/diminisher-argon_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Diminisher Argon</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 C." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/sentinel-legend_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Sentinel Legend</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 C." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/sentinel-argon_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Sentinel Argon</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 C." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/spectrum-legend_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Spectrum Legend</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 C." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
                        </div>
                    </div>
                    <div class="card white-text grey darken-3 padding-15 custom_data">
                        <div style="display: flex; width: 300px;">
                            <img src="<?php echo DOMAIN; ?>do_img/global/items/ship/spectrum-dusklight_30x30.png" width="50px">
                            <div class="container_t_auction">
                                <strong>Spectrum Dusklight</strong>
                                <p>15% Shield 20% Health (full set)</p>
                            </div>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 200px; overflow: hidden;">
                            <strong>- - -</strong>
                        </div>
                        <div class="container_t_auction" style="margin-left: auto; margin-right: auto; width: 160px; overflow: hidden;">
                            0 U.
                        </div>
                        <div class="container_t_auction" style="display: flex; margin-left: auto; margin-right: auto;">
                            <input type="text" name="" id="" placeholder="1.000.000 C." style="color:white;">
                            <div class="container_t_auction">
                                <button class="btn grey darken-2">Bid</button>
                            </div>
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
        openCity(null, 'London'); /* London */
    }());
</script>

<?php require_once(INCLUDES . 'footer.php'); ?>