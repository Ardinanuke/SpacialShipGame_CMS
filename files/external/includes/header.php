<!--
  @Developer: DEV_Node
  @Github: luislortega
  @Owners: play.deathspaces.com
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>DeathSpaces: Massive Multiplayer Game</title>
  <meta charset="UTF-8" />
  <meta name="description" content="DeathSpaces CMS" />
  <meta name="keywords" content="Universe, Wars, Ships" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet" />
  <!-- Stylesheets -->


  <?php if (!Functions::IsLoggedIn()) { ?>

    <!-- IF loggin == true remove this -->
    <link rel="stylesheet" href="<?php echo DOMAIN; ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo DOMAIN; ?>css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo DOMAIN; ?>css/owl.carousel.css" />
    <link rel="stylesheet" href="<?php echo DOMAIN; ?>css/custom/custom_index.css" />
    <link rel="stylesheet" href="<?php echo DOMAIN; ?>css/animate.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- END IF -->
  <?php } ?>
  <?php if (Functions::IsLoggedIn()) { ?>

    <style type="text/css" media="screen">
      @import "/css/cdn/darkorbit.css";
    </style>
    <!--[if lt IE 8]>
    <style type="text/css" media="screen">    @import "https://darkorbit-22.bpsecure.com/css/cdn/darkorbit_ie.css?__cv=847a28c6403b40d9e68a422864467f00"; </style>
    <![endif]-->
    <style type="text/css" media="screen">
      @import "/css/cdn/includeSkinNavbar.css";
    </style>
    <style type="text/css" media="screen">
      @import "/css/cdn/includeInfoStyles.css";
    </style>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&amp;subset=latin,greek,cyrillic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700,500italic&amp;subset=latin,greek,cyrillic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" type="text/css">
    <link type="text/css" href="/css/cdn/jQuery/jquery.jscrollpane.css" rel="stylesheet" media="all">
    <link type="text/css" href="/css/cdn/scrollbar_dark.css" rel="stylesheet" media="all">
    <link rel="stylesheet" media="all" href="/css/cdn/internalStart.css">
    <link rel="stylesheet" media="all" href="/css/cdn/window.css">
    <link rel="stylesheet" media="all" href="/css/cdn/window_alert.css">
    <link rel="SHORTCUT ICON" href="/favicon.ico" type="image/x-icon">

    <script type="text/javascript" src="/js/scriptaculous/prototype.js"></script>
    <script type="text/javascript" src="/js/scriptaculous/scriptaculous.js"></script>
    <script type="text/javascript" src="/js/scriptaculous/builder.js"></script>
    <script type="text/javascript" src="/js/scriptaculous/effects.js"></script>
    <script type="text/javascript" src="/js/scriptaculous/dragdrop.js"></script>
    <script type="text/javascript" src="/js/scriptaculous/controls.js"></script>
    <script type="text/javascript" src="/js/scriptaculous/slider.js"></script>
    <script type="text/javascript" src="/js/scriptaculous/sound.js"></script>
    <script type="text/javascript" src="/js/scriptaculous/do_extensions.js"></script>
    <script type="text/javascript" src="/js/scriptaculous/tooltip.js"></script>
    <script type="text/javascript" src="/js/scriptaculous/window.js"></script>
    <script type="text/javascript" src="/js/tooltipPilotSheet.js"></script>
    <script type="text/javascript" src="/js/livepipe.js"></script>
    <script type="text/javascript" src="/js/scroller.js"></script>
    <script type="text/javascript" src="/js/customSelect.js"></script>
    <script type="text/javascript" src="/js/jQuery/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="/js/jQuery/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="/js/jQuery/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="/js/jQuery/custom-form-elements.js"></script>
    <style type="text/css">
      input.styled {
        display: none;
      }
      select.styled {
        position: relative;
        width: 60px;
        opacity: 0;
        filter: alpha(opacity=0);
        z-index: 5;
      }
      .disabled {
        opacity: 0.5;
        filter: alpha(opacity=50);
      }
    </style>
    <script type="text/javascript" src="/js/jQuery/jquery.flashembed.js"></script>
    <script type="text/javascript" src="/js/jQuery/doExtensions.js"></script>
    <script type="text/javascript" src="/js/jQuery/jquery.qtip-1.0.0-rc3.min.js"></script>
    <script type="text/javascript" src="/js/jQuery/jquery.livequery.js" id="liveQuery"></script>
    <script type="text/javascript" src="/js/hangarSlots.js"></script>
    <script type="text/javascript">
      jQuery.noConflict();
    </script>
    <script type="text/javascript" src="/resources/js/tools.js"></script>
    <script type="text/javascript" src="/resources/js/tools/text.js"></script>
    <script type="text/javascript" src="/resources/js/user.js"></script>
    <!-- Darkorbit Javascript tools -->
    <script type="text/javascript">
      var textResourcesTitle = {
        "seo_title_client": "DarkOrbit",
        "seo_title_client_blinking": "Darkorbit | Cliente del juego",
        "seo_title_no_aid": "DarkOrbit Reloaded | MMO de acci\u00f3n espacial",
        "seo_tittle_clans": "Darkorbit | Clanes",
        "seo_tittle_pet": "Darkorbit | P.E.T.",
        "seo_tittle_ships": "Darkorbit | Naves",
        "seo_tittle_uridium": "Darkorbit | Uridium",
        "seo_tittle_techfactory": "Darkorbit | Tecnof\u00e1brica",
        "seo_tittle_hangar": "Darkorbit | Hangar",
        "seo_title_standard": "DarkOrbit Reloaded | MMO de acci\u00f3n espacial",
        "seo_title_achievements": "DarkOrbit | Logros",
        "seo_title_shop": "DarkOrbit | Tienda",
        "seo_title_skylab": "DarkOrbit | Skylab"
      };
      jQuery.each(textResourcesTitle, function(i, n) {
        Tools.Text.setResource(i, n)
      });
      Tools.Text.setResource('message_contact_block_user', 'Se ha añadido al usuario a tu lista negra.');
      Tools.Text.setResource('message_contact_unblock_user', 'Se ha eliminado al usuario de tu lista negra.');
      Tools.Text.setResource('message_contact_user_is_blocking_contacts', 'Este usuario ha bloqueado las solicitudes de contacto.');
      Tools.Text.setResource('message_contact_invite_sended', 'Se ha enviado tu solicitud de amistad.');
      Tools.Text.setResource('message_contact_spam_lock', 'Estás haciendo clic más rápido que la velocidad de la luz. Prueba otra vez en unos segundos.');
      Tools.Text.setResource('eqt_error_generic', 'Ha ocurrido un error, por favor, actualiza la página. Si el error se repite, contacta con el soporte.');
    </script>
    <script type="text/javascript" src="/resources/js/tools/popup.js"></script>
    <script type="text/javascript" src="/resources/js/tools/errorHandler.js"></script>
    <script type="text/javascript" src="/resources/js/library.js"></script>
    <script type="text/javascript" src="/resources/js/main.js"></script>
    <script language="javascript">
      Main.Initialize('1', 'dosid=4c8fcc2c4a982b85d641e5211e24a41a');
    </script>
    <!-- EventStream ServerAdapter getJavascriptPageTag -->
    <script language="javascript">
      window.BpEventStream = window.BpEventStream || {
        "time": new Date().getTime(),
        "context": {
          "pid": 755,
          "uid": 171451723,
          "tid": "bed138661b06b9fb885ce23d0a815084",
          "iid": "aab4a2141cd1e8242c2bf74d095b6c60",
          "sid": "4c8fcc2c4a982b85d641e5211e24a41a",
          "ctime": 1586676112019
        }
      };
    </script>
    <script language="javascript" src="//assets.bpsecure.com/eventstream/eventstream.js?ts=5288920"></script>
    <script src="/js/function.js" type="text/javascript"></script>
    <script src="/js/base.js" type="text/javascript"></script>
    <script type="text/javascript">
      jQuery.fn.qtip.styles.dohdr = {
        background: '#000000',
        'font-size': '11px',
        width: 'auto',
        color: '#666666',
        border: {
          width: 1,
          radius: 1,
          color: '#303030'
        },
        tip: 'topLeft',
        name: 'dark'
      };
      jQuery.fn.qtip.styles.dohdr300 = {
        background: '#000000',
        'font-size': '11px',
        width: 'auto',
        color: '#666666',
        border: {
          width: 1,
          radius: 1,
          color: '#303030'
        },
        tip: 'topLeft',
        width: 300,
        name: 'dark'
      };
      jQuery.fn.qtip.styles.doauc300 = {
        background: '#000000',
        'font-size': '11px',
        width: 'auto',
        color: '#666666',
        border: {
          width: 1,
          radius: 1,
          color: '#303030'
        },
        tip: 'topLeft',
        width: 300,
        name: 'dark'
      };

      var header_ttips = new Object;
    header_ttips['uid'] = 'User ID';
    header_ttips['lvl'] = 'Level';
    header_ttips['exp'] = 'Experience';
    header_ttips['hnr'] = 'Honor';
    header_ttips['fri'] = '';
    header_ttips['nms'] = 'Message system';
    header_ttips['jpt'] = 'Jackpot';
    header_ttips['uri'] = 'Uridium';
    header_ttips['cdt'] = 'Credits';
    header_ttips['userInfo_addFriend'] = 'Agregar como amigo';
    header_ttips['userInfo_sendMessage'] = 'Escribir mensaje';
    header_ttips['userInfo_showProfile'] = 'Mostrar perfil de jugador';
    header_ttips['userInfo_blacklistUser'] = 'Añadir jugador a la lista negra';
    header_ttips['userInfo_blacklistUserListed'] = 'Este usuario está en tu lista negra';
    header_ttips['pilot'] = 'Here you can see:<br />- Profile<br />- Archievements<br />- Skill tree';
    header_ttips['skylab'] = 'Here you can see:<br />- Skylab<br />- TechLab<br />- Upgrades';
    header_ttips['hangarSlot_arrow_tooltip_expand'] = 'Desplegar';
    header_ttips['hangarSlot_arrow_tooltip_collapse'] = 'Plegar';
    header_ttips['tp_expand_hangar'] = 'Compra un pabellón adicional para el hangar.';
    header_ttips['head_multiplier'] = 'En la próxima transacción de uridium recibes 0-veces la cantidad solicitada.';
    header_ttips['clanInfo_contactClan'] = 'Clan contact';
    header_ttips['head_multiplier'] = 'En la próxima transacción de uridium recibes 0-veces la cantidad solicitada.';
    header_ttips['header_home'] = 'Inicio';
    header_ttips['header_server'] = 'Servidor';
    header_ttips['header_help'] = 'Help';
    header_ttips['header_logout'] = 'Close';
    header_ttips['header_account'] = 'Settings';
    </script>
</head>
<?php } ?>
</head>
<body>

