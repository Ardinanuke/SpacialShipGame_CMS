<?php 
date_default_timezone_set('America/Los_Angeles');
$timezone = date_default_timezone_get();
$date = date('H:i', time());

require_once(INCLUDES . 'header.php'); ?>
<!-- affiliateStartTag -->
<!-- Login Tag (14) --> <script type="text/javascript" language="javascript">
    var SemTmLoginCount = "14";
</script>
<script type="text/javascript">window.name = "do_webpage";</script>
<!-- user context info layer -->
<div id="userInfoLayer" style="display:none;position:absolute;z-index:100;"></div>
<!-- hangar context info layer -->
<div id="hangarInfoLayer" style="display:none;position:absolute;z-index:100;"></div>
<!-- clan info layer -->
<div id="clanInfoLayer" style="display:none;position:absolute;z-index:100;"></div>
<!-- seitenabdecker -->
<div id="generalInfoPopup" class="fliess13px-grey">
    <div class="popup_headcontainer">
        <a id="general_popup_close" class="popup_close" href="javascript:void(0)" onclick="Main.hideGeneralInfoLayer()"></a>
    </div>
    <div id="general_popup_question" class="question">
        <img src="https://darkorbit-22.bpsecure.com/do_img/global/popups/general/success_icon.png?__cv=7ea7548d2cb4149555faab27c783e500" id="general_popup_success" class="success">
        <img src="https://darkorbit-22.bpsecure.com/do_img/global/popups/general/error_icon.png?__cv=abbabc79fb0ffe608c13a681aa9db900" id="general_popup_error" class="error">
        <p id="general_popup_question_text">this text will be replace on ajax call</p>
    </div>
    <div class="popup_contentcontainer">
        <div class="popup_footcontainer">
            <div id="general_popup_close_button" class="popup_close_button" onclick="Main.hideGeneralInfoLayer()">
                <img src="https://darkorbit-22.bpsecure.com/do_img/en/text/ok_white_grey.gif">
            </div>
        </div>
    </div>
</div>


<div id="busy_layer" style="visibility: hidden; display: none;"></div>
<div id="busy_layer_hh"></div>
<div id="instanceList"></div>
<div id="spinner" class="hidden"></div>


<!-- seitenabdecker -->

<style type="text/css" media="screen">    @import "https://darkorbit-22.bpsecure.com/css/cdn/includeInfoLayer.css?__cv=a0a813df090fdb3002c3891307238000";</style>
<script type="text/javascript">

infoText = '';
icon = '';

</script>
<script type="text/javascript" src="https://darkorbit-22.bpsecure.com/js/infoLayer.js?__cv=49d5cbe0b1125ad7d3c272d67c3f4d00"></script>

<div id="infoLayer" class="confirmInfoLayer fliess13px-grey">
    <div class="popup_shop_headcontainer">
        <a class="popup_shop_close" href="javascript: void(0);" onclick="closeInfoLayer()"></a>
    </div>
    <div class="popup_shop_contentcontainer">
        <br>
        <div class="question"></div>
        <div class="popup_shop_footcontainer">
            <div id="infoLayerConfirm">
                <div class="popup_shop_confirm_button">
                    <div id="infoLayer_link_confirm" class="popup_shop_confirm_text" style="background-image: url('https://darkorbit-22.bpsecure.com/do_img/en/text/ok_white_grey.gif');">
                    </div>
                </div>
                <div class="popup_shop_abort_button">
                    <div class="popup_shop_abort_text" style="background-image: url('https://darkorbit-22.bpsecure.com/do_img/en/text/confirmBox_cancel_white_grey.gif');" onclick="closeInfoLayer();">
                    </div>
                </div>
            </div>

            <div id="infoLayerInfo">
                <div class="popup_shop_close_button">
                    <div class="popup_shop_close_text" style="background-image: url('https://darkorbit-22.bpsecure.com/do_img/en/text/ok_white_grey.gif');" onclick="closeInfoLayer();"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
</script>









<script type="text/javascript">

function showHelp() {
    showBusyLayer();
    width_x = document.body.offsetWidth;
    container_x = jQuery("#helpLayer").width();
    jQuery("#helpLayer").css('left', ((width_x/2) - (container_x/2)) + 'px');
    jQuery("#helpLayer").css('top', '150px');
    jQuery("#helpLayer").css('display', 'block');
}

</script>

<div id="helpLayer" style="position:absolute;width:480px;display:none;z-index:10;" class="fliess11px-grey">
    <div id="popup_standard_headcontainer">
        <div id="popup_standard_headline"><img src="https://darkorbit-22.bpsecure.com/do_img/en/text/popup_nav_main_label_help.gif"></div>
        <div id="popup_standard_close"><a href="javascript:void(0);" onclick="closeLayer('helpLayer');" onfocus="this.blur();"><img src="https://darkorbit-22.bpsecure.com/do_img/global/popups/popup_middle_close.jpg?__cv=450b0ca7303746b8cfcba9bef857e600"></a></div>
    </div>
    <div id="popup_standard_content">
        <div id="popup_info_sign_bg" style="background-image:url(https://darkorbit-22.bpsecure.com/do_img/global/popups/infopopup_bg_help.png?__cv=eeb69ad925a2326a7c399261bf1e6d00);">
            <p>
                <strong>¡Hola, piloto espacial!</strong><br>
<br>
Tu viaje en DarkOrbit te lleva a través de galaxias desconocidas llenas de misterios y peligros. La primera norma: ¡No te asustes!<br>
                <br>
Aquí recibes ayuda:
                </p><ul style="margin:20px 0px;">
                    <li style="margin-left:20px;list-style-type:disc;">Visita nuestro <a href="/GameAPI.php?action=portal.redirectToBoard" target="_blank" onfocus="this.blur()" style="text-decoration:underline">foro</a>.</li>
                    
                </ul>
                ¿No encuentras ninguna respuesta para tus preguntas? Entonces contacta con nuestro <a href="indexInternal.es?action=support&amp;back=internalStart" target="_blank" onfocus="this.blur()" style="text-decoration:underline">soporte</a>.<br>
                <br>
¡Mucha suerte!
                <br style="margin-bottom: 30px;">
                
            <p></p>
        </div>
    </div>
    <div id="popup_standard_content_additionalInfo">

    </div>
    <div id="popup_standard_footercontainer">
        <div id="popup_standard_singleButton">
            <table border="0" cellpadding="0" cellspacing="0" align="center" onclick="closeLayer('helpLayer');">
            <tbody><tr>
                <td class="button_resizable_1"></td>
                <td class="button_resizable_2"><img src="https://darkorbit-22.bpsecure.com/do_img/en/text/popup_ok.gif"></td>
                <td class="button_resizable_3"></td>
            </tr>
            </tbody></table>
        </div>
    </div>
    <br class="clearMe">
</div>



                    
                                                                                                                                           <style type="text/css">
    
    #targetedOffersEvent {
        width: 480px;
        height: 600px;
        background-image:url(https://darkorbit-22.bpsecure.com/do_img/global/layer/targetedOffers.jpg?__cv=bdafaa0b2bdbf3f2959a75eb01df7300);
        display:none;
        position:absolute;
        top: 38px;
        z-index:25;
    }

    #targetedOffersEvent #content_headline {
        color: #ffcc00;
        font-weight: bold;
        font-size: 16px;
        margin-top: 116px;
        width: 100%;
        top:114px;
    }

    #targetedOffersEvent #content_teaser {
        font-size: 11px;
        font-weight: bold;

    }

    #targetedOffersEvent #content_main_spacecup_week2 {

        height: 384px;
        margin: 0 auto;
        margin-top:112px;
    }

    #targetedOffersEvent #button_close{
        float:none;
        margin-left: 450px;

    }

    #targetedOffersEvent #buton_main{
        width:321px;
        height: 36px;
        background-image: url(https://darkorbit-22.bpsecure.com/do_img/global/layer/deal/otto/shopping_button_sprite_321x36.png?__cv=fd2d822c11dcb8118c41acbab5328100);
        background-position: 0 0;
        cursor: pointer;
        line-height: 37px;
        font-size: 12px;
        font-weight: bold;
        color: white;
        margin: 0 auto;
        top: 523px;
        position: absolute;
        left: 81px;
        text-transform:uppercase;
    }

    #targetedOffersEvent #buton_main:hover {
        background-position: 0 36px;
    }
    #targetedOffersEvent #buton_main:active {
        background-position: 0 72px;
    }

    #targetedOffersEvent #content_headline {
        margin-top: 40px;
    }
    #targetedOffersEvent #content_headline
    , #targetedOffersEvent #content_teaser,
    , #targetedOffersEvent #content_content
       {
          margin-bottom: 10px;
      }

    #targetedOffersEvent #content_footer{
        margin-bottom: 40px;
    }



    #targetedOffersEvent #gradient_top_targetedOffersEvent {

        height: 15px;
        width: 414px;
        background-image: url(https://darkorbit-22.bpsecure.com/do_img/global/layer/gradient_top.png?__cv=fc29b77b80dee5c0d7d84d40b754a100);
        z-index: 10;
        margin: 0 auto;
    }
    #targetedOffersEvent #gradient_bottom_targetedOffersEvent{
        position: absolute;
        height: 98px;
        top: 412px;
        left: 0;
        background-image: url(https://darkorbit-22.bpsecure.com/do_img/global/layer/gradient_bottom.png?__cv=61ac574d29d3747328d961eb87730f00);
        z-index: 10;
        width: 400px;
        margin-left: 33px;
    }


    .bn_content{
        color: #bcd3e3;
    }

    .bn_content span{
        color: #fff;
    }

    .bn_content span.highlight{
        font-size: 11px;
        font-weight: bold;
        color: #ffcc00;

    }

    .bn_footer{
        style:color: #bcd3e3;
    }

    #targetedOffersEvent .scroll-pane-targetedOffersEvent {
        width: 416px;
        height: 370px;
        overflow: auto;
        position: relative;
        margin:0 auto;
        margin-top: -16px;

    }

    #targetedOffersEvent #scroll-pane-content-targetedOffersEvent {
        width: 349px;
        text-align: left;
        overflow-x: hidden;
        overflow-y: auto;
        margin:0 auto;
    }

    #targetedOffersEvent .jspPane{
        position: relative;
    }

    
</style>

<script type="text/javascript" id="sourcecode">
    
    jQuery=jQuery.noConflict(true);
    jQuery(function()
    {
        jQuery('.scroll-pane-targetedOffersEvent').jScrollPane({showArrows: true});
    });

    
</script>
<!-- 
<div id="infoLayer">
    <div id="targetedOffersEvent" style="position: absolute; left: 720px; display: none;">
        <div id="button_close" onclick="closeLayer('targetedOffersEvent')"></div>
        <div id="content_main_spacecup_week2">
            <div id="gradient_top_targetedOffersEvent"></div>
            <div class="scroll-pane-targetedOffersEvent" style="overflow: hidden; padding: 0px; width: 416px;"><div class="jspContainer" style="width: 416px; height: 370px;"><div class="jspPane" style="padding: 0px; top: 0px; width: 416px;">
                <div id="scroll-pane-content-targetedOffersEvent">
                    <p>
               
                    </p><div id="content_headline" class="bn_headline">¡No dejes escapar esta oferta exclusiva!</div>
                    
                    <div id="content_content" class="bn_content">Hola, piloto espacial:
<br><br>
¡Ahórrate un <span class="highlight">66</span> en un <span class="highlight">1 mes Premium</span> y consigue <span class="highlight">reparaciones de naves gratuitas, robots de reparación el doble de eficaces y mucho más</span>!
<br>
Es una oferta limitada, ¡que no se te escape!
<br><br></div>
                    <div id="content_footer" class="bn_footer">Tu equipo de DarkOrbit</div>
                    <p></p>
                </div>
            </div></div></div>
            
        </div>
        <div id="buton_main" onclick="openExternal('/?action=internalPaymentProxy&amp;req=879d4c48e274c39c78e522f9e35143ce9b70d324ab8165512814977955110e60f0ac9177c9be61d0517c51aae5578f9fbd4911ef4f5d6972f89d63565cd2b8e7478229dcf101112da1aeffe7b2ebc2bdedda755c53e25f8d6946dcf4f94ad396&amp;v=1d5095c5592d4d4bf304e568f91d36d9');closeLayer('targetedOffersEvent')">Comprar</div>
    </div>
</div> 
<script>
    
    showBusyLayer();
    jQuery('#targetedOffersEvent').center('horizontal');
    jQuery("#targetedOffersEvent").show();
    
</script> -->
                                                <style type="text/css">
    
    #emailVerify {
        width: 762px;
        height: 394px;
        background-image:url(https://darkorbit-22.bpsecure.com/do_img/global/layer/action_emailVerify.jpg?__cv=f54eb9b740a04b3e450194e6fada1d00);
        display:none;
        position:absolute;
        top: 38px;
        z-index:25;
    }

    #emailVerify #titel {
        color: white;
        height: 50px;
        left: 225px;
        line-height: 50px;
        position: absolute;
        top: 10px;
        width: 320px;
        margin-top: 7px;
        font-weight: bold;
    }

    #emailVerify #emailVerify_main {
        position: absolute;
        top: 100px;
        left: 141px;
        width: 480px;
        height: 251px;
        text-align: left;
    }
    #emailVerify #emailVerify_main #bn_text {
        margin: 0px 20px 40px 20px;
    }

    #emailVerify #content_headline {
        margin-top: 10px;
    }
    #emailVerify #content_headline
    , #emailVerify #content_teaser
    , #emailVerify #content_content
    , #emailVerify #content_footer {
        margin-bottom: 10px;
    }

    #emailVerify #content_teaser {
        color: #FFCC00;
    }
    #bn_text a {
        color: #FFCC00;
    }

    #emailVerify #gradient_top, #emailVerify #gradient_bottom {
        position: absolute;
        width: 464px;
    }
    #emailVerify #gradient_top {
        height: 15px;
        top: 0;
        left: 0;
        background-image: url(https://darkorbit-22.bpsecure.com/do_img/global/layer/summerGames2011/gradient_top.png?__cv=4618143d205e2d81fc856432a579f700);
        z-index: 10;
        position: absolute;
        top: 100px;
        left: 141px;
    }
    #emailVerify #gradient_bottom {
        height: 98px;
        top: 154px;
        left: 0;
        background-image: url(https://darkorbit-22.bpsecure.com/do_img/global/layer/gradient_bottom.png?__cv=61ac574d29d3747328d961eb87730f00);
        z-index: 10;
        position: absolute;
        top: 254px;
        left: 141px;
    }
    #emailVerify #teaserImage {
        width: 357px;
        height: 93px;
        background-image: url(do_img/global/layer/killScreen2_content.png);
        margin:  5px 0 10px 20px;
    }
    #emailVerify ul, #emailVerify ol, #emailVerify li {
        list-style: disc;
        list-style-position: outside;
        margin-left: 7px !important;
    }
    #dontShow label {

    }
    
</style>

<!-- styles needed by jScrollPane - include in your own sites
<link type="text/css" href="https://darkorbit-22.bpsecure.com/css/jQuery/jquery.jscrollpane.css?__cv=9af65d2e9c92153b72e7289186102900" rel="stylesheet" media="all">
<script type="text/javascript" src="https://darkorbit-22.bpsecure.com/js/infoLayer.js?__cv=49d5cbe0b1125ad7d3c272d67c3f4d00"></script>
<div id="infoLayer">
    <div id="emailVerify" style="position: absolute; left: 579px; display: none;">
        <div id="titel"></div>
        <div id="button_close" onclick="closeLayer('emailVerify')"></div>
        <div id="gradient_top"></div>
        <div id="emailVerify_main" class="" style="overflow: hidden; padding: 0px; width: 480px;"><div class="jspContainer" style="width: 480px; height: 251px;"><div class="jspPane" style="padding: 0px; top: 0px; width: 480px;">
            <div id="bn_text">
                <form name="emailVerify"><input type="hidden" name="reloadToken" value="5a143a092bfbd99de2208566ba926ebf">
                    <input type="hidden" name="layerId" id="layerId" value="3628">
                    <div class="bn_headline">¡Apúntate ya a la newsletter de DarkOrbit!</div>
                    <div class="bn_teaser">¡No vuelvas a perderte ninguna noticia importante ni códigos de bono!</div>
                    <div class="bn_text">Hola, piloto espacial:
<br><br>
¿Quieres estar siempre al día y recibir fantásticos códigos de bono de forma regular?
    Pues apúntate ya a la newsletter en el <a href="https://accountcenter.bpsecure.com/Settings/Newsletter?authUser=22&amp;token=mOK5ml0USeIi6iQjrP9s3gi0IghQcNmCysbbn6Rs_7GYJXAlydTSgTmqnSeV5pfqOtV9XNkZJs-KrbyglAXqomwS3tb_6-SUFMkannce_sB3NBfHMVQ_IuZ_WCY1C06QTz05Xg" target="_blank">menú de cuenta de DarkOrbit</a> y confirma tu dirección de email.
<br></div>
                    <div class="bn_footer">Tu equipo de DarkOrbit</div>
                    <div class="bn_text">
                        <input type="checkbox" name="dontShowAgain" id="dontShowAgain"><label for="dontShowAgain">No volver a mostrar.</label>
                    </div>
                </form>
            </div>
        </div></div></div>
        
        <div id="button_main" onclick="Layer.handleEmailVerify()">CERRAR</div>
    </div>
</div> 
<script>
showBusyLayer();
jQuery(document).ready(function() {
    jQuery(function() {
        jQuery('#emailVerify_main').jScrollPane({autoReinitialise: true, showArrows: true});
    });
    jQuery('#emailVerify').center('horizontal');
    jQuery("#emailVerify").show();
})
</script>-->
        <style>
#news {
    position:absolute;
    left:50%;
    top:85px;
	margin-left:-400px;
    background-position:0 0px;
    text-align:left;
    z-index:10000;
    border:2px solid white;}
#news_head {
    width:680px;height:40px;
    background-image:url(https://darkorbit-22.bpsecure.com/do_img/global/popups/popup2_top_bg.jpg?__cv=5bf95d660dae98dbb4f07d401eac4700);
    text-align:right;
}
#news_head_date {
    float: left;
    margin: 6px 0 0 10px;
}
#news_content {
    background-image:url(https://darkorbit-22.bpsecure.com/do_img/global/popups/popup2_mid_bg.jpg?__cv=cd2b78a4e250a83db34571d91f9db000);
    padding: 20px 35px;
    width: 610px;
    background-repeat: repeat-y;
    height:460px;
    overflow: auto;
}
#news_content li {
    list-style-type: disc;
    margin-left: 15px;
}
* html #news_content {
    width:610px;
}
#news_bottom {
    width:680px;height:49px;
    background-image:url(https://darkorbit-22.bpsecure.com/do_img/global/popups/popup2_bottom_bg.jpg?__cv=05ef0c3a74c444e24045d5d1c67a0d00);
    padding-top:15px;
    vertical-align:top;
}
#news_but_close {
    width:160px;height:19px;
    margin:auto;
    text-align:center;
    line-height:19px;
    background-image:url(https://darkorbit-22.bpsecure.com/do_img/global/popups/popup2_button_bg.png?__cv=9b58cb835063817adb8d35c164505800);
}
</style>
<div id="news" style="width:680px;display:none;">

        <div id="news_eventHonDay" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">Noticias del 01.01.2015</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('eventHonDay');" onfocus="this.blur()"><img src="https://darkorbit-22.bpsecure.com/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3 class="bn_headline">Potenciador de honor del 50%: ¡Compra 5000 unidades de uridium y consigue más honor durante 24 horas!</h3>
            <br>
            	<div class="bn_teaser"><b>Una oportunidad única para conseguir un 50% más de honor</b></div>
            	<br>
            	<div class="bn_content">¡Hola, piloto espacial!
	<br>Recibe un 50% más de honor al destruir otras naves y en las misiones y dale un empujón a tu carrera. ¡Sube en la jerarquía!
	<ul>
<li>Por 5000 unidades de uridium, tendrás durante 1 día un potenciador de honor del 50%.</li>
	<li>Se pueden sumar hasta 5 días, uno por cada 5000 unidades de uridium.</li>
	<li>¿Quieres usar de golpe el potenciador durante 5 días? ¡Pues compra 25 000 unidades de uridium!</li>
	</ul>
	<br>
El potenciador de honor del 50% se activa de inmediato y funciona en tiempo real. <a class="open_external" onclick="javascript:openExternal(&quot;/flashAPI/openPayment.php?section=uridium&quot;)" type="button" target="_blank" style="cursor:pointer">¡Aprovecha <b>HOY</b></a> mientras puedas!
	<br></div>
            	<br>
            	<br>
            	<div class="bn_footer">Tu equipo de DarkOrbit</div>
            <br>
                    </div>
        
        <div id="news_bottom" class="fliess11px">

            <div style="float:left;margin-left:16px;"><a href="javascript: showNews('SocialChannels');"><img src="https://darkorbit-22.bpsecure.com/do_img/global/popups/popup2_but_backward.jpg?__cv=4e570fcf2d01a16b811dc34c0cb31600" width="42" height="20"></a></div>                        <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('eventHonDay');" style="display:block;" onfocus="this.blur();"><strong>Cerrar</strong></a></div>


        </div>
    </div>
            <div id="news_SocialChannels" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">Noticias del 22.03.2017</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('SocialChannels');" onfocus="this.blur()"><img src="https://darkorbit-22.bpsecure.com/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3 class="bn_headline">No te pierdas las novedades</h3>
            <br>
            	<div class="bn_teaser"><b>¡Síguenos en las redes, consigue toda la información y mucho más!</b></div>
            	<br>
            	<div class="bn_content">¡Hola, pilotos espaciales!<br><br>Seguid a DarkOrbit en los canales de juego más importantes para estar al tanto de todo lo que ocurre. Charlad con el equipo, dadnos vuestras opiniones y conoced todos los entresijos de vuestro juego favorito.<br><br>El equipo de DarkOrbit está presente en los siguientes canales: <ul> <li><a href="https://discord.gg/j3MygA6" target="_blank">Discord live chat</a> - Contacta al momento con el equipo y con tus amigos</li> <li><a href="https://www.twitch.tv/darkorbit/" target="_blank">Twitch.tv</a> - Emisiones regulares en directo con el equipo</li> <li><a href="https://www.facebook.com/darkorbit" target="_blank">Facebook</a> - Fotos, historias y más</li> <li><a href="https://twitter.com/darkorbit" target="_blank">@darkorbit</a> - La actualidad con anuncios instantáneos</li> <li><a href="https://www.youtube.com/darkorbithq" target="_blank">YouTube</a> - Trailers, podcasts y directos de Twitch antiguos</li> <li><a href="http://www.bigpoint.com/darkorbit/board/" target="_blank">Foros</a> (para ir al foro de tu idioma, haz clic en "Foro" al final de la página)</li> </ul></div>
            	<br>
            	<br>
            	<div class="bn_footer">Únete a nosotros en tu canal favorito para estar al tanto de las novedades del juego y de todos los acontecimientos.</div>
            <br>
                    </div>
        
        <div id="news_bottom" class="fliess11px">

                        <div style="float:right;margin-right:16px;"><a href="javascript: showNews('eventHonDay');"><img src="https://darkorbit-22.bpsecure.com/do_img/global/popups/popup2_but_forward.jpg?__cv=1afb0252fc4710f06e721eaee46b5e00" width="42" height="20"></a></div>            <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('SocialChannels');" style="display:block;" onfocus="this.blur();"><strong>Cerrar</strong></a></div>


        </div>
    </div>
    

</div>
<script>
var SID='dosid=4c8fcc2c4a982b85d641e5211e24a41a';
//var win = window;
//width_x = win.innerWidth ? win.innerWidth : win.document.body.clientWidth;
//container_x = jQuery("#news").width();
//jQuery("#news").css('left', ((width_x/2) - (container_x/2)) - 100 +'px');
//jQuery("#news").css('top', '50px');

function showNews(newsID) {
    jQuery('.news_container').hide();
    jQuery('#news').show();
    jQuery("#news_" + newsID).show();
    showBusyLayer();
}
function closeNews(newsID) {
    jQuery("#news").hide();
    hideBusyLayer();
}


</script>
                  

<div class="backgroundImageContainer" style="background-image: url(https://darkorbit-22.bpsecure.com/do_img/global/bg_standard_<?php echo ($player['factionId'] == 1 ? 'mmo' : ($player['factionId'] == 2 ? 'eic' : 'vru')); ?>.jpg">
<div class="overallContainer">

<div class="outerContainer fliess11px-gelb">
<?php
require_once(INCLUDES . 'data.php'); ?>

<script type="text/javascript">
function onFailFlashembed() {
var inner_html = '<div class="flashFailHead">Instala el Adobe Flash Player</div>\n\
        <div class="flashFailHeadText">Para jugar a DarkOrbit, necesitas el Flash Player más actual. ¡Solo tienes que instalarlo y empezar a jugar!\n\
        <div class="flashFailHeadLink" style="cursor: pointer">Descárgate aquí el Flash Player gratis: <a href=\"http://www.adobe.com/go/getflashplayer\" style=\"text-decoration: underline; color:#A0A0A0;\">Descargar Flash Player<\/a></div></div>';

    if(!document.getElementById('flashHeader')){
        document.getElementById('header_container').innerHTML = inner_html;
        document.getElementById('equipment_container').innerHTML = "";
        document.getElementById('materialiser').innerHTML = "";
    }

    if(document.getElementById('inventory')){
        document.getElementById('equipment_container').innerHTML = inner_html;
    }

    if(document.getElementById('flashGG')){
        document.getElementById('materialiser').innerHTML = inner_html;
        jQuery('#materialiser').css('margin-left', 110);
        jQuery('#materialiser').css('margin-top', 40);
    }
}

function expressInstallCallback(info) {
    // possible values for info: loadTimeOut|Cancelled|Failed
    onFailFlashembed();
}

</script>
<div class="bodyContainer">
<script type="text/javascript">
    // server time setup
    var serverTime = '02:21';
    var serverDate = '12.04.2020';
    var meridiem_am = 'AM';
    var meridiem_pm = 'PM';

    var tmp = serverTime.split(':');
    var tmp2 = tmp[1].split(' ');

    var hour = tmp[0];
    var minute = tmp2[0];
    var meridiem = tmp2[1];
</script>
<script type="text/javascript" language="javascript" src="https://darkorbit-22.bpsecure.com/js/internalStart.js?__cv=5b195e526d4c5091dcd9f52347902600"></script>

<div id="mainContainer">
    <div id="mainContainerContent">
        <div id="homeUserContent">
            <img src="https://darkorbit-22.bpsecure.com/do_img/global/avatar.png?__cv=542fac54a9623de23d58dd8a72317e00" alt="DeathSpaceDEV" id="pilotAvatar">

            <div id="companyLogo"><img src="/img/companies/logo_<?php echo ($player['factionId'] == 1 ? 'mmo' : ($player['factionId'] == 2 ? 'eic' : 'vru')); ?>.png"></div>

            <div class="infoContainerHeadline">PILOT CARD</div>
            <div id="userInfoSheet">
                <div class="userInfoLine">
                    <label>User:</label> <?php echo $player['pilotName']; ?>
                </div>
                                    <div class="userInfoLine">
                        <label>Clan</label> <?php echo ($player['clanId'] == 0 ? 'Free Agent' : $mysqli->query('SELECT name FROM server_clans WHERE id = ' . $player['clanId'] . '')->fetch_assoc()['name']); ?>
                    </div>
                                <div class="userInfoLine" style="max-width: 180px;">
                    <label>Rank:</label><img src="<?php echo DOMAIN; ?>img/ranks/rank_<?php echo $player['rankId']; ?>.png" > <?php echo Functions::GetRankName($player['rankId']); ?>
                </div>
                <div id="userContentLevel">
                    <label>Level:</label> ...
                </div>
            </div>

            <a id="userButtonLeft" class="userHomeButton" href="#">
                Pilot
            </a>
            <a id="userButtonMiddle" class="userHomeButton" href="#">
                Clasification
            </a>
            <a id="userButtonRight" class="userHomeButton" href="#">
            Diary
            </a>
        </div>

        <div id="homeRankingContent">
            <div class="infoContainerHeadline">FACTION RECORDS</div>

            <div id="rankingTabLeft" class="rankingTab homeTabActive" onclick="openUsers()">
                PILOTS
            </div>
            <div id="rankingTabRight" class="rankingTab" onclick="openClan()">
                CLANS
            </div>
       

            <table class="homeRankingTable" id="ranking_Users" border="0" cellpadding="1" cellspacing="1">
                <tbody><tr class="rankingHeadline">
                    <td style="width: 132px;">Name</td>
                    <td style="width: 45px;">Faction</td>
                    <td style="width: 45px;">Rank</td>
                    <td style="width: 75px;">Value</td>
                </tr>
                <?php foreach ($mysqli->query('SELECT * FROM player_accounts WHERE rankId != 21 AND rank > 0 ORDER BY rank ASC LIMIT 9') as $value) { ?>

                  <tr class="rankingOdd">
                    <td showuser="4xpaW" title="<?php echo $value['pilotName']; ?>: Click to see details" style="cursor: pointer">
                    <?php echo $value['pilotName']; ?>
                    </td>
                    <td>
                    <img src="/img/companies/logo_<?php echo ($value['factionId'] == 1 ? 'mmo' : ($value['factionId'] == 2 ? 'eic' : 'vru')); ?>_mini.png">
                    </td>
                    <td title="<?php echo $value['rank']; ?>" style="cursor: pointer"><?php echo $value['rank']; ?></td>
                    <td><?php echo $value['rankPoints']; ?></td>
                </tr>
                  

                <?php } ?>

                <?php if ($player['rank'] > 9) { ?>
                  <tr class="rankingOdd">
                    <td showuser="4xpaW" title="<?php echo $player['pilotName']; ?>: Click to see details" style="cursor: pointer">
                    <?php echo $player['pilotName']; ?>
                    </td>
                    <td>
                    <img src="/img/companies/logo_<?php echo ($player['factionId'] == 1 ? 'mmo' : ($player['factionId'] == 2 ? 'eic' : 'vru')); ?>_mini.png">
                    </td>
                    <td title="<?php echo $player['rank']; ?>" style="cursor: pointer"><?php echo $player['rank']; ?></td>
                    <td><?php echo $player['rankPoints']; ?></td>
                </tr>
                <?php } ?>

            
            </tbody></table>

            <table class="homeRankingTable" id="ranking_Clans" border="0" cellpadding="1" cellspacing="1" style="display: none">
                <tbody><tr class="rankingHeadline">
                    <td style="width: 138px;">Tag</td>
                    <td style="width: 52px;">Rank</td>
                    <td style="width: 110px;">Value</td>
                </tr>
                <?php foreach ($mysqli->query('SELECT * FROM server_clans WHERE rank > 0 ORDER BY rank ASC LIMIT 9') as $value) { ?>

                    <tr class="rankingOdd">
                    <td class="clan_name_qtip" title="<?php echo $value['name']; ?>">
                        <a href="/#">
                        <?php echo $value['tag']; ?>
                        </a>
                    </td>
                    <td><?php echo $value['rank']; ?></td>
                    <td><?php echo $value['rankPoints']; ?></td>
                </tr>
                    
                <?php if (isset($clan) && $clan['rank'] > 9) { ?>
                    <tr class="rankingOdd">
                    <td class="clan_name_qtip" title="<?php echo $value['name']; ?>">
                        <a href="/#">
                        <?php echo $clan['tag']; ?>
                        </a>
                    </td>
                    <td><?php echo $clan['rank']; ?></td>
                    <td><?php echo $clan['rankPoints']; ?></td>
                </tr>
                <?php } ?>
                <?php } ?>
            
            </tbody></table>
            <a id="hallOfFame" class="userHomeButton" href="#">
                Hall of fame
            </a>
        </div>

<script type="text/javascript">
    jQuery(".clan_name_qtip").qtip({
        style:'dohdr',
        position:{target:'mouse'}
    })
</script>

        <div id="homeNewsContent">
                <link rel="stylesheet" type="text/css" href="https://darkorbit-22.bpsecure.com/css/be-news.css?__cv=1bd05efb83b837972826b9cddeb24f00" media="screen">
    <style>
        
.be-position-content1{
    position:absolute;
    left:20px;
    top:125px;
    width:260px;
    height:195px;
    overflow:hidden;
}
.be-position-footer{
    position:absolute;
    left:30px;
    top:330px;
    width:260px;
    height:30px;
    overflow:hidden;
}
.be-position-center{
    position:absolute;
    left:60px;
    top:300px;
    width:200px;
    height:30px;
    overflow:hidden;
}
.be-position-half_headline_inline{
    position:absolute;
    left:20px;
    top:145px;
    width:260px;
    height:20px;
    overflow:hidden;
}
.be-position-default_button{
    position:absolute;
    left:30px;
    top:330px;
    width:260px;
    height:30px;
    overflow:hidden;
}
.be-position-higher_button{
    position:absolute;
    left:30px;
    top:306px;
    width:260px;
    height:30px;
    overflow:hidden;
}
.be-position-default_footer{
    position:absolute;
    left:15px;
    top:334px;
    width:273px;
    height:24px;
    overflow:hidden;
}
.be-position-half_headline{
    position:absolute;
    left:15px;
    top:185px;
    width:273px;
    height:20px;
    overflow:hidden;
}
.be-position-half_maintext_with_footer{
    position:absolute;
    left:15px;
    top:185px;
    width:273px;
    height:110px;
    overflow:hidden;
}
.be-position-half_maintext{
    position:absolute;
    left:15px;
    top:165px;
    width:273px;
    height:160px;
    overflow:hidden;
}
.be-position-half_maintext_with_headline{
    position:absolute;
    left:15px;
    top:205px;
    width:273px;
    height:90px;
    overflow:hidden;
}
.be-position-full_size{
    position:absolute;
    left:0px;
    top:0px;
    width:303px;
    height:361px;
    overflow:hidden;
}
        .news-button-left{
            background-image: url('https://darkorbit-22.bpsecure.com/do_img/global/internalStart/breaking_news_button_left_25x50.png?__cv=0a76211a8f089bc45cbfd85995753b00');
            left:0px;
        }
        .news-button-right{
            background-image: url('https://darkorbit-22.bpsecure.com/do_img/global/internalStart/breaking_news_button_right_25x50.png?__cv=8b04ea90bd49a052e539ca5df3dd4900');
            right:0;
        }

        .news-button{
            position: absolute;
            z-index: 3;
            top: 158px;
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: -25px center;
            width: 25px;
            height: 50px;
        }

        .news-button:hover {
            background-position: -50px center;
        }
        .news-button:active {
            background-position: -75px center;
        }

        .news-base-container{
            padding-left:8px;
            padding-top:7px;
            overflow: hidden;
        }
        .news-base-layout{

        }

        .news-base-pagination{
            width:100%;
            padding-top:7px;
            min-height: 24px;
            text-align: center;

        }

        .news-base-pagination-dot{
            background-color: black;
            border-color: #517999;
            border-style: solid;
            border-width: 1px;
            min-width:8px;
            min-height: 8px;
            border-radius: 5px;
            display: inline-block;
            vertical-align: middle;
            outline: none;
        }
        .news-base-pagination-inner-dot{
            background-color: #517999;
            border-style: none;
            min-width: 6px;
            min-height: 6px;
            border-radius: 3px;
            display: inline-block;
            margin: 1px;
            outline: none;
        }

        .news-controll-base{
            /*transition: max-height 1000ms ease,opacity 1s ease, height 1000ms ease;*/
            transition: opacity 1500ms ease;
            max-height: 381px;
            height: 381px;
            opacity: 1;
        }

        .news-controll-hide{
            opacity: 0;
            max-height: 0px;
            height 0px;
        }
        .news-controll-show{
            opacity: 1;
        }

        .news-countdown{
            width: 303px;
            height: 25px;
            text-align: center;
            margin-left: 9px;
            position: absolute;
            top: 366px;
        }
    </style>
    <script type="application/javascript">
        var beCurrent = 1;
        var beTotal = 0;
        var newsTimer = null;
        var delayedTimer = null;
        var reloadInitiated = false;
        function startTimer(){
            newsTimer = window.setInterval(beNext, 5000);

        }

        function switchToRegularTimer(){
            clearInterval(delayedTimer);
            delayedTimer = null;
            startTimer();
        }

        function startDelayedTimer(){
            stopTimer();
            if (delayedTimer != null){
                clearInterval(delayedTimer);
                delayedTimer = null;
            }
            delayedTimer = window.setInterval(switchToRegularTimer, 5000);
        }


        function stopTimer(){
            clearInterval(newsTimer);
        }

        function beNext(){
            beHide(beCurrent);
            beCurrent++;
            if (beCurrent > beTotal){
                beCurrent = 1;
            }
            beShow(beCurrent);
        }

        function bePrev(){
            beHide(beCurrent);
            beCurrent--;
            if (beCurrent < 1){
                beCurrent = beTotal;
            }
            beShow(beCurrent);
        }

        function beSwitchTo(nr){
            beHide(beCurrent);
            beCurrent = nr;
            beShow(nr);
        }

        function beShow(nr){
            if (jQuery('#be_news_' + nr)) {
                //jQuery('#be_news_' + nr).show(400);
                jQuery('#be_news_' + nr).removeClass('news-controll-hide');
                jQuery('#be_pag_dot_' + nr).show();
            } else {
                console.error('show - element not exists ','be_news_' + nr);
            }
        }
        function beHide(nr){
            if (jQuery('#be_news_' + nr)) {
                //jQuery('#be_news_' + nr).hide(400);
                jQuery('#be_news_' + nr).addClass('news-controll-hide');
                jQuery('#be_pag_dot_' + nr).hide();
            } else {
                console.error('hide - element not exists ','be_news_' + nr);
            }
        }
        startTimer();
    </script>
<br><br>
    
    <div class="news-button news-button-left" onclick="startDelayedTimer();bePrev()"></div>
    <div class="news-button news-button-right" onclick="startDelayedTimer();beNext()"></div>
    <div class="news-base-container">

                    
            
            <div id="be_news_1" onclick="startDelayedTimer()" class="news-base-layout news-controll-base  news-controll-hide" style="">
                
            <div id="Honor_Day" class="breaking-news-layer" style="background-image: url(https://darkorbit-22.bpsecure.com/do_img/new/bg/honor-day_s_201802.jpg?__cv=3aa92f1c1083bc1f33431fdb4c1d2c00);width:303px;height:381px;position: relative;background-repeat: no-repeat;background-color: transparent">
                <div onclick="window.location.href='?action=internalPayment'" class="be-position-center be-style-defaultButton">COMPRAR AHORA</div><div class="be-position-half_headline be-style-headline">¡Día del honor!</div><div class="be-position-half_maintext_with_headline be-style-default">¡Consigue un potenciador de honor del 50%! ¡Compra 5.000 unidades de uridium y consigue más honor durante 24 horas!</div><script>
                    var newsTimer5e92c1908c38eTimer = window.setInterval(newsTimer5e92c1908c38eTick, 1000);
                    var newsTimer5e92c1908c38eElement = 'newsTimer5e92c1908c38eDiv';
                    var newsTimer5e92c1908c38eEnd = 1586754000;
                    function newsTimer5e92c1908c38eTick() {
                       
                        var diff = newsTimer5e92c1908c38eEnd - Math.floor(Date.now() / 1000);
                        //console.log('timer',newsTimer5e92c1908c38eDiv, diff);
                        document.getElementById('newsTimer5e92c1908c38eDiv').innerHTML = printTime(diff);
                    }</script>
                    
            </div>
        
            </div>
            <div id="be_news_2" onclick="startDelayedTimer()" class="news-base-layout news-controll-base news-controll-hide" style="">
            <div id="battlePass_eternalGate" class="breaking-news-layer" style="background-image: url(https://darkorbit-22.bpsecure.com/do_img/new/bg/battlepass_s_201907.jpg?__cv=fa48663542467ae23fe4682f6d1a4900);width:303px;height:381px;position: relative;background-repeat: no-repeat;background-color: transparent">
                <div onclick="openExternal('/?action=internalPaymentProxy&amp;req=36fe840063143894345642bfd79372719608670205f35f0368c2626f99d030391610e6f3bff45dca20c7ffa634e91a5329bb552429d327d83f713176ab43c1c5eb473cb58d708db0e2e506615aaed77399e68360e528f57b266c76a92068c2d7b5153ef6ab9b599df3ccbca0de0927b1b18713786fc595f927388ad2b8d43313b9a1cfac86f6b2bef2b50aee3777cbdd&amp;v=f295f518be77b27e2b59317359f99384')" class="be-position-center be-style-defaultButton">COMPRAR AHORA</div><div class="be-position-half_headline be-style-bold_full_content">Pase de batalla</div><div class="be-position-half_maintext_with_headline be-style-default">¡Obtén recompensas adicionales por completar objetivos! ¡No te pierdas la munición de bono, los materiales de mejora y el elegante diseño de nave Asimov Sentinel!</div><script>
                    var newsTimer5e92c1908c51dTimer = window.setInterval(newsTimer5e92c1908c51dTick, 1000);
                    var newsTimer5e92c1908c51dElement = 'newsTimer5e92c1908c51dDiv';
                    var newsTimer5e92c1908c51dEnd = 1587704399;
                    function newsTimer5e92c1908c51dTick() {
                       
                        var diff = newsTimer5e92c1908c51dEnd - Math.floor(Date.now() / 1000);
                        //console.log('timer',newsTimer5e92c1908c51dDiv, diff);
                        document.getElementById('newsTimer5e92c1908c51dDiv').innerHTML = printTime(diff);
                    }</script>
                    <div class="news-countdown" id="newsTimer5e92c1908c51dDiv">Duración restante: 285:37:44</div>
                    
            </div>
        
            </div>

                    
            
            <div id="be_news_3" onclick="startDelayedTimer()" class="news-base-layout news-controll-base news-controll-hide" style="">
                
            <div id="apoc_refresh_Feb2020" class="breaking-news-layer" style="background-image: url(https://darkorbit-22.bpsecure.com/do_img/new/bg/bbox_apoc_s_202002.jpg?__cv=0971df1af2818ea9cd29a0a500c68000);width:303px;height:381px;position: relative;background-repeat: no-repeat;background-color: transparent">
                <div onclick="window.location.href='?action=internalDock&amp;tpl=internalDockSpecials'" class="be-position-center be-style-defaultButton">COMPRAR AHORA</div><div class="be-position-half_headline be-style-bold_full_content">Actualización de caja del Apocalipsis</div><div class="be-position-half_maintext_with_headline be-style-default">¡Hemos actualizado la caja del Apocalipsis! ¡Fabrica o compra paquetes de llaves para tener la oportunidad de conseguir los nuevos diseños de VANT Dusklight Diminisher!</div><script>
                    var newsTimer5e92c1908c59eTimer = window.setInterval(newsTimer5e92c1908c59eTick, 1000);
                    var newsTimer5e92c1908c59eElement = 'newsTimer5e92c1908c59eDiv';
                    var newsTimer5e92c1908c59eEnd = 1586926799;
                    function newsTimer5e92c1908c59eTick() {
                       
                        var diff = newsTimer5e92c1908c59eEnd - Math.floor(Date.now() / 1000);
                        //console.log('timer',newsTimer5e92c1908c59eDiv, diff);
                        document.getElementById('newsTimer5e92c1908c59eDiv').innerHTML = printTime(diff);
                    }</script>
                    <div class="news-countdown" id="newsTimer5e92c1908c59eDiv">Duración restante: 69:37:44</div>
                    
            </div>
        
            </div>

                    
            
            <div id="be_news_4" onclick="startDelayedTimer()" class="news-base-layout news-controll-base news-controll-hide" style="">
                
            <div id="level_up_ascend_booster" class="breaking-news-layer" style="background-image: url(https://darkorbit-22.bpsecure.com/do_img/new/bg/levelup_booster_s_201806.jpg?__cv=26c67326ef4ce70bfaaa950a56636100);width:303px;height:381px;position: relative;background-repeat: no-repeat;background-color: transparent">
                <div onclick="openExternal('/?action=internalPaymentProxy&amp;req=757b934f97a83757ae78311a61cbb8a11cabfa80eb1e8aa52fa554665145b2b0112d6b70decf5edb027943c5306d1e85cfea9029ef98722343cb1cfeb28a2530f18e00c6c9db6acecd741d4d95b7ef440cbedf530d739c7fe1ffe6161f62e4b9a6bbaee9e2e6b17b2a8579973dab94330b491d4b4618957d6efc4ef195992697abc5a7eab694448c639a87632da379fc178132d1f5303162cecc36305b070e9429521fa7ebcf223f9b961f2e87b4b3c97a3e6255bc3313e2fcbc1d0117370240&amp;v=d323904e053fb83fe58af19995edb22d')" class="be-position-center be-style-defaultButton">COMPRAR AHORA</div><div class="be-position-half_headline be-style-bold_full_content">¡Asciende!</div><div class="be-position-half_maintext_with_headline be-style-default">¡Supera a la competencia con nuestra selección de paquetes de potenciadores de la ascensión! ¡Actúa ya y una amplia cantidad de potenciadores de honor y experiencia te ayudarán en tu misión de convertirte en el mejor de la galaxia!</div><script>
                    var newsTimer5e92c1908c67dTimer = window.setInterval(newsTimer5e92c1908c67dTick, 1000);
                    var newsTimer5e92c1908c67dElement = 'newsTimer5e92c1908c67dDiv';
                    var newsTimer5e92c1908c67dEnd = 1586754000;
                    function newsTimer5e92c1908c67dTick() {
                       
                        var diff = newsTimer5e92c1908c67dEnd - Math.floor(Date.now() / 1000);
                        //console.log('timer',newsTimer5e92c1908c67dDiv, diff);
                        document.getElementById('newsTimer5e92c1908c67dDiv').innerHTML = printTime(diff);
                    }</script>
                    
            </div>
        
            </div>

                    
            
            <div id="be_news_5" onclick="startDelayedTimer()" class="news-base-layout news-controll-base" style="">
            <div id="GG_SpecialWeekend" class="breaking-news-layer" style="background-image: url(https://darkorbit-22.bpsecure.com/do_img/new/bg/sale_galaxy_gate_b_201805.jpg?__cv=b382731b519f5ebb2a955d6272861600);width:303px;height:381px;position: relative;background-repeat: no-repeat;background-color: transparent">
            </div>
            </div>
            <div id="be_news_6" onclick="startDelayedTimer()" class="news-base-layout news-controll-base news-controll-hide" style="">
            <div id="alienEggsEaster2020" class="breaking-news-layer" style="background-image: url(https://darkorbit-22.bpsecure.com/do_img/new/bg/DO_breakingnews_easterSales2020.jpg?__cv=c8cd2891bafe0e8453be16c99a21ea00);width:303px;height:381px;position: relative;background-repeat: no-repeat;background-color: transparent">
                <div onclick="openExternal('/?action=internalPaymentProxy&amp;req=75101219539173a385af6418f1d5dc7f4b2143b771639387e207d832856ae0e4df63301d8521826c617a8fe7a1e4f3a33601b9831d6e61eb44be940108fc5d44d6a405f65e5eb718cffdf10f2fc8f3203d5b30c4d4da25ea205deeb8ca40e7dc0ed924ee131a7aadb6dc895b08e6529359d55d86831265a80e9a712a4dc4fc60a0a77e494aee1841485ccfd1b08ba3e037745a89f1baf2634a57272e30b324b8929a1e172133cb25e28206644abe2de7dc3af03963b78198a159caf9ae8ec40b&amp;v=61452333528d3c3acec3864f982d1e25')" class="be-position-center be-style-defaultButton">COMPRAR AHORA</div><div class="be-position-half_headline be-style-bold_full_content">Sabotaje primaveral</div><div class="be-position-half_maintext_with_headline be-style-default">Hay huevos alienígenas sueltos. ¡Ya es hora de cazarlos! ¡En los próximos días, disfruta de lo lindo con el caos y los fuegos artificiales del espacio profundo!</div><script>
                    var newsTimer5e92c1908c7d1Timer = window.setInterval(newsTimer5e92c1908c7d1Tick, 1000);
                    var newsTimer5e92c1908c7d1Element = 'newsTimer5e92c1908c7d1Div';
                    var newsTimer5e92c1908c7d1End = 1586840399;
                    function newsTimer5e92c1908c7d1Tick() {
                       
                        var diff = newsTimer5e92c1908c7d1End - Math.floor(Date.now() / 1000);
                        //console.log('timer',newsTimer5e92c1908c7d1Div, diff);
                        document.getElementById('newsTimer5e92c1908c7d1Div').innerHTML = printTime(diff);
                    }</script>
                    <div class="news-countdown" id="newsTimer5e92c1908c7d1Div">Duración restante: 45:37:44</div>
                    
            </div>
        
            </div>

                    
            
            <div id="be_news_7" onclick="startDelayedTimer()" class="news-base-layout news-controll-base news-controll-hide" style="">
                
            <div id="eternalGate" class="breaking-news-layer" style="background-image: url(https://darkorbit-22.bpsecure.com/do_img/new/bg/eternal_gate_s_202004.jpg?__cv=8a2a7a74372e7c25270374313c0a8700);width:303px;height:381px;position: relative;background-repeat: no-repeat;background-color: transparent">
                <div class="be-position-half_headline be-style-bold_full_content">Puerta eterna</div><div class="be-position-half_maintext_with_headline be-style-default">Las naves IA han vuelto a las andadas. ¡Y esta vez, con Cyborgs! Han conseguido crear un sistema que los revive cuando se les destruye y vuelven más fuertes que antes. ¿Podrás acabar con sus interminables oleadas?</div><script>
                    var newsTimer5e92c1908c843Timer = window.setInterval(newsTimer5e92c1908c843Tick, 1000);
                    var newsTimer5e92c1908c843Element = 'newsTimer5e92c1908c843Div';
                    var newsTimer5e92c1908c843End = 1587704399;
                    function newsTimer5e92c1908c843Tick() {
                       
                        var diff = newsTimer5e92c1908c843End - Math.floor(Date.now() / 1000);
                        //console.log('timer',newsTimer5e92c1908c843Div, diff);
                        document.getElementById('newsTimer5e92c1908c843Div').innerHTML = printTime(diff);
                    }</script>
                    <div class="news-countdown" id="newsTimer5e92c1908c843Div">Duración restante: 285:37:44</div>
                    
            </div>
        
            </div>

                    
            
            <div id="be_news_8" onclick="startDelayedTimer()" class="news-base-layout news-controll-base news-controll-hide" style="">
                
            <div id="uridiumBank" class="breaking-news-layer" style="background-image: url(https://darkorbit-22.bpsecure.com/do_img/new/bg/uridiumbank_2019.jpg?__cv=b143c82d8d7d440da225c7917c12f800);width:303px;height:381px;position: relative;background-repeat: no-repeat;background-color: transparent">
                <div class="be-position-half_headline be-style-bold_full_content">Banco de uridium</div><div class="be-position-half_maintext_with_headline be-style-default">¡Llena el banco de uridium antes de que se agote el tiempo! Completa misiones diarias y acumula uridium en el banco. Cuando esté lleno, ¡podrás abrirlo a un gran precio!</div>
            </div>
        
            </div>

                    
            
            <div id="be_news_9" onclick="startDelayedTimer()" class="news-base-layout news-controll-base news-controll-hide" style="">
                
            <div id="discord" class="breaking-news-layer" style="background-image: url(https://darkorbit-22.bpsecure.com/do_img/new/bg/discord_s_201802.jpg?__cv=5fcc236a44575d95f2ba225127969d00);width:303px;height:381px;position: relative;background-repeat: no-repeat;background-color: transparent">
                <div onclick="window.location.href='https://discord.gg/j3MygA6'" class="be-position-center be-style-defaultButton">Únete al Discord de DO</div><div class="be-position-half_headline be-style-bold_full_content">Únete al Discord de DO</div><div class="be-position-half_maintext_with_headline be-style-default">¡Únete a la comunidad de Discord de DarkOrbit y habla con jugadores, moderadores y desarrolladores! Forma parte de la familia DarkOrbit y disfruta de la diversión en Discord.</div>
            </div>
        
            </div>

        

    </div>

    <script type="text/javascript">
        function printTime(secondsLeft){
            if (secondsLeft <= 0){
                // short delay for sync with backend
                if (reloadInitiated == false && secondsLeft < -1){
                    reloadInitiated = true;
                    location.reload();
                }
                return '00:00:00';
            }
            var hours = Math.floor( secondsLeft / (60*60) ),
                mins  = Math.floor( secondsLeft / 60 ),
                secs  = secondsLeft,
                hh    = hours,
                mm    = mins - hours * 60,
                ss    = secs - mins * 60;

            return "Duración restante: " + tpad(hh) + ':' + tpad(mm) + ':' + tpad(ss);
        }
        function tpad(num) {
            return num > 9 ? num : '0'+num;
        }
        
    </script>

        </div>
    </div>
    <div id="sidebarHome">
        <div id="serverTimeContainer">
            <span id="serverTime"><?php echo $date; ?></span>
            <span id="meridiem"></span>
        </div>

        <div id="sidebarLights" class="sidebarNoEvent">
                    </div>

        <div id="sidebarStatus">
            INCOMING
                    </div>

        <div id="sidebarEvent">

            <div id="eventDisplay_upcoming" class="eventDisplay">
                            <div class="upcomingEvent">
                    <div class="eventDate">12.04.</div>
                    <div class="eventTitle">Capture the Beacon</div>
                    <div class="eventTime">
                        19:00 -
                        22:00
                    </div>
                </div>
                <div class="upcomingEvent">
                    <div class="eventDate">12.04.</div>
                    <div class="eventTitle">Capture the Beacon</div>
                    <div class="eventTime">
                        19:00 -
                        22:00
                    </div>
                </div>
                <div class="upcomingEvent">
                    <div class="eventDate">12.04.</div>
                    <div class="eventTitle">Capture the Beacon</div>
                    <div class="eventTime">
                        19:00 -
                        22:00
                    </div>
                </div>
                 <div class="upcomingEvent">
                    <div class="eventDate">12.04.</div>
                    <div class="eventTitle">Capture the Beacon</div>
                    <div class="eventTime">
                        19:00 -
                        22:00
                    </div>
                </div>
            
            </div>
            

                </div>

            <a class="sidebarBottomLink" href="#">
            Clasification
        </a>
        </div>
</div>



<div class="footerContainer">

<div id="teamCreditsBox" style="height:600px;" class="fliesstext">
    <div id="teamCredits_close"><a href="javascript:void(0);" onclick="closeInfo('teamCreditsBox');"><img src="https://darkorbit-22.bpsecure.com/do_img/global/intro/but_close.png?__cv=4addfeeb6d889c0632072f85386d1900" alt=""></a></div>
    <div id="container_teamcredits" style="height: 528px;">
        <div id="teamCredits_text" style="overflow: hidden; padding: 0px; width: 510px;"><div class="jspContainer" style="width: 510px; height: 555px;"><div class="jspPane" style="padding: 0px; top: 0px; width: 510px;">

            <ul id="main">
                <li style="height: 1px;"></li>
                <li id="head"></li>
                <li id="description">El MMO del espacio cargado de acción en tu navegador</li>
                <li id="producers">
                    <ul>
                        <li id="pr title">Productor</li>
                        <li>Shawn Lord</li><li>
                        </li><li>Tim Balzer (Technical)</li>
                    </ul>
                </li>
                <li id="pm">
                    <ul>
                        <li id="pm title">Jefe de proyecto</li>
                        <li>Tim Denke</li>
                    </ul>
                </li>
                <li id="gd">
                    <ul>
                        <li id="gd title">Diseño del juego</li>
                        <li>Miguel Sergey Pronin</li>
                        <li>Miguel Sanchez Campillos</li>
                    </ul>
                </li>
                <li id="dev">
                    <ul>
                        <li id="dev title">Desarrollo</li>
                        <li>
                            <ul id="table1">
                                <li id="table1_col1">
                                    <ul id="dev1">
                                        <li>Erik Haddenhorst</li>
                                        <li>Florian Rüther</li>
                                        <li>Tatiana Kosiakova</li>
                                        <li>Ivan Melnikov</li>
                                    </ul>
                                </li>
                                <li id="table1_col2">
                                    <ul id="dev2">
                                        <li>Sebastian <i>"luttz"</i> Jauert</li>
                                        <li>Dennis <i>"nop0x90"</i> Bikowski</li>
										<li>Benyamin Achi</li>
										<li>Lukasz Witkowski</li>
                                    </ul>
                                </li>
                                <li id="table1_col3">
                                    <ul id="dev3">
                                        <li>Lorenz <i>"TheBigLou13"</i>  Spitzmüller</li>
                                        <li>Ebrima Leigh</li>
                                        <li>Thomas <i>"Pogrim"</i> Garschke</li>
                                        <li>Ronny Gericke</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <div class="clearMe"></div>
                <li id="graphics">
                    <ul>
                        <li id="graphic title">Gráficos</li>
                        <li>Young-il Shim</li>
                        <li>Ann-Cathrin Kenderesi</li>
                        <li>Ivan Kantarovich</li>
                        <li>Malte Sturm</li>
                    </ul>
                </li>
                <li id="qa">
                    <ul>
                        <li id="qa title">Control de calidad</li>
                        <li>Annemieke Böhm</li>
                        <li>Marcel Radtke</li>
                        <li>Maria-Ester Osborne Castro</li>
                        <li>Mahmoud Nachati</li>
                    </ul>
                </li>
                <li id="cm">
                    <ul>
                        <li id="cm title">Administración de la comunidad</li>
                        <li>Dang-Stefan La Hong</li>
                        <li>Jörg </li><li>"Kerensky"</li> Koonen
                    </ul>
                </li>
                
                <li id="thanks">
                    <ul>
                        <li id="thanks title">Agradecimientos especiales a</li>
                        <li>
                            <ul id="table2">
                                <li id="table2_col1">
                                    <ul id="thanks1">
                                    	<li>Stephan <i>"bananajoe"</i> Krause</li>
                                    	<li>Jan Lamely</li>
                                    	<li>Matthew  <i>"Sephiroth-/"</i> Milligan</li>
                                    	<li>Christopher <i>"chr1zm0"</i> Baumbach</li>
                                        <li>Terence <i>"harle80"</i> Viban</li>
                                        <li>James Valadas Marques</li>
										<li>Serdar <i>"mcballi75"</i> Balli</li>
                                        <li>Ralf Baumann</li><li>
										</li><li>Christian <i>"Guezli"</i> Oberle</li>
										<li>Mathias <i>"mblpz"</i> Böttcher</li>
										<li>Stephan Scholz</li>
										<li>Nurdogan <i>"bomfirit"</i> Erdem</li>
										<li>Roman Fuhrer</li>
                                    </ul>
                                </li>
                                <li id="table2_col2">
                                    <ul id="thanks2">
                                        <li>Johannes Wieland</li>
                                    	<li>Benjamin <i>"Radovan8"</i> Cory</li>
                                    	<li>Savas Ziplies</li>
                                    	<li>David <i>"redgeneral"</i> Kempf</li>
                                        <li>Jens Christian Beyer</li>
										<li>Maximilian Mantz</li>
                                        <li>Ron <i>"joenase"</i> Zenczykowski</li>
										<li>Wolfgang Timme</li>
                                        <li>Florian Liss</li>
                                        <li>Alexander <i>"DM47"</i> Stein</li>
										<li>Marco <i>"BPHorst"</i> Geweke</li>
                                        <li>Christian Godorr</li>
                                        <li>Jonathan <i>"rushworth10"</i> Rushworth</li>
                                    </ul>
                                </li>
                                <li id="table3_col3">
                                    <ul id="thanks3">
                                        <li>Jürgen "Joncek" Frerichs</li>
                                        <li>Christian "krischan" Franke</li>
                                        <li>Sebastian "afriend" Trier</li>
                                        <li>Oliver "Pakkanen" Michels</li>
                                        <li>Vicens Fayos</li>
                                        <li>Maciej "maac1" Kozlowski</li>
                                        <li>Robin Hoese</li>
                                        <li>David Braun</li>
                                        <li>Siegfried Jensen</li>
                                        <li>Marko Vajagic</li>
                                        <li>Jonathan Lindsay</li>
                                        <li>Maik "Shiznik" Jefferies</li>
                                        <li>Dirk Schmidt</li>
                                    </ul>
                                </li>
                                <br class="clearMe">
                            </ul>
                        </li>
                        <li id="thanks_music">Background music by <a href="http://www.professorkliq.com" target="_blank">Professor Kliq</a> - Shifting Focus - Provided by Jamedo.</li>
                    </ul>
                </li>
            </ul>
        </div></div></div> <!--text -->
    </div> <!-- container -->
</div>

<script type="text/javascript" id="sourcecode">

    jQuery(function()
    {
        jQuery('#teamCredits_text').jScrollPane({autoReinitialise: true, showArrows: true});
    });

</script>



    <div id="imprint_ingame" class="fliesstext">
                    <a href="#">Privacy Terms</a> |
                <a href="javascript:void(0);" onclick="showFooterLayer('teamCreditsBox')">Credits</a> |
        <a href="#" >Foro</a>
    </div>
        <div class="socialBar">
        <a href="http://www.facebook.com/darkorbit" target="_blank">
            <div class="facebook"></div>
        </a>
        <a href="http://twitter.com/darkorbit" target="_blank">
            <div class="twitter"></div>
        </a>
        <a href="http://www.youtube.com/user/darkorbithq" target="_blank">
            <div class="youtube"></div>
        </a>

        <div class="left"></div>
        <div class="content">
            <div>FOLLOW US</div>
        </div>
        <div class="right"></div>
    </div>
    
</div><!-- End footerContainer -->
</div><!-- End bodyContainer -->
</div><!-- End outerContainer -->
</div><!-- End overallContainer -->
</div>
<script type="text/javascript">
    
    if (jQuery('#toolbar').length > 0) {
        jQuery('#toolbar').css('float', 'none');
        jQuery('body').css('background-position', 'center 30px');
    }
    
</script>
<link rel="stylesheet" type="text/css" href="https://darkorbit-22.bpsecure.com/resources/css/popup.css?__cv=4e58da2dec4df33ee5f4c239848dda00">
<div id="popup">
    <div class="header">
        <div class="button-close"></div>
    </div>
    <div class="body">
        <div class="icon icon-question"></div>
        <div class="icon icon-error"></div>
        <div class="icon icon-success"></div>
        <div class="content fliess13px-grey"></div>
    </div>
    <div class="footer single-button">
        <div class="button button-green">
            <div class="text" style="background-image: url(https://darkorbit-22.bpsecure.com/do_img/en/text/ok_white_grey.gif);"></div>
        </div>
        <div class="button button-blue">
            <div class="text" style="background-image: url(https://darkorbit-22.bpsecure.com/do_img/en/text/confirmBox_cancel_white_grey.gif);"></div>
        </div>
    </div>
</div>
<div id="popup-modalBackground"></div>
<img id="popup-loading" alt="Loading..." src="https://darkorbit-22.bpsecure.com/do_img/global/pilotSheet/profilePage/loadingAnimation.gif">
<script>
let rankingTabLeft = document.getElementById("rankingTabLeft");
let rankingTab = document.getElementById("rankingTabRight");
let rankingUsers = document.getElementById("ranking_Users");
let rankingClans = document.getElementById("ranking_Clans");

function openUsers(){
    rankingTabLeft.classList.add("homeTabActive");
    rankingTab.classList.remove("homeTabActive");
    rankingUsers.style.display = "block";
    rankingClans.style.display = "none";
}
function openClan(){
    rankingTab.classList.add("homeTabActive");
    rankingTabLeft.classList.remove("homeTabActive");
    rankingUsers.style.display = "none";
    rankingClans.style.display = "block";
}
</script>
<?php 
require_once(INCLUDES . 'footer.php'); ?>