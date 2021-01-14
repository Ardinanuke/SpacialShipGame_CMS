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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
      body {
        background-image: url("/do_img/global/background.jpg");
      }

      .main-container-header {
        display: flex;
        justify-content: center;
      }

      /* 860 x 230 */
      .container-header {
        background-image: url("https://darkorbit-22.bpsecure.com/do_img/global/header/buttons/header_background_02.png?__cv=fcdc868cb714055ebdfe929360c3ea00");
        background-repeat: no-repeat;
      }

      .user-stats {
        display: flex;
        color: white;
        margin-left: 70px;
      }

      .user-stats p {
        font-family: Arial, Helvetica, sans-serif;
        width: 150px;
        font-size: 11px;
        margin-top: 2px;
      }

      .user-stats-lvl {
        margin-right: 200px;
      }

      .button-invisible span {
        color: #276EF1;
        font-size: 20px;
      }

      .button-invisible {
        background: none;
        box-shadow: 0px 0px 0px transparent;
        border: 0px solid transparent;
        text-shadow: 0px 0px 0px transparent;
      }

      .invisible-home {
        margin-left: 70px;
      }

      .invisible-user {
        margin-left: 620px;
      }

      .container-header-ship {
        position: absolute;
        display: flex;
        top: 0;
        margin-left: 330px;
      }

      .container-ship {
        margin-top: 35px;
      }

      .container-iris,
      .container-pet {
        margin-top: 55px;
      }

      .container-main-menu {
        margin-top: 5px;
        display: flex;
      }

      .button-menu {
        margin-bottom: 7px;
        color: white;
        border: none;
        width: 120px;
        height: 30px;
        text-align: center;
        background-color: #276EF1;
      }

      .left-button-top {
        margin-left: 20px;
      }

      .left-button-mid {
        margin-left: 35px;
      }

      .left-button-bot {
        margin-left: 55px;
      }

      .center-buttons {
        margin-top: 70px;
        margin-left: 46px;
        margin-right: 50px;
      }

      .start-button {
        font-size: 30px;
        color: white;
        border: none;
        width: 170px;
        height: 50px;
        text-align: center;
        background-color: #3AA76D;
      }

      .right-button-top {
        margin-left: 150px;
      }

      .right-button-mid {
        margin-left: 15px;
      }

      .premium-text {
        color: #FFD600;
        text-align: center;
        font-size: 15px;
        margin-bottom: 0;
      }

      .container-money {
        display: flex;
        margin-left: 580px;
      }

      .container-money p {
        color: white;
        margin-top: 9px;
        margin-bottom: 0;
        width: 130px;
      }

      /* content */
      .main-container-content {
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding-right: 2vw;
        padding-left: 2vw;
        margin-left: 6vw;
        margin-right: 7vw;
      }

      .black-box-info {
        background: rgba(0, 0, 0, 0.7);
      }

      .box-info-titulo {
        font-size: 18px;
        text-align: center;
      }

      .container-pilot-bio {
        display: flex;
        justify-content: center;
      }

      .pilot-bio-images {
        margin-right: 10px;
      }

      .container-hall-of-fame {
        display: flex;
        justify-content: center;
      }

      .button-see-all {
        border: none;
        background-color: #3AA76D;
      }

      .container-buttons-hall-of-fame button {
        margin: 0;
        border: none;
        background: rgba(0, 0, 0, 0.7);
      }

      .container-news {
        text-align: center;
      }

      .container-buttons-news {
        text-align: center;
      }

      .container-buttons-news button {
        margin-left: 50px;
        margin-right: 50px;
        background: none;
        border: none;
      }

      .container-buttons-content {
        padding-left: 5px;
        padding-right: 5px;
        height: 180px;
        overflow: hidden;
      }

      .event-container {
        background-color: gray;
        margin-left: 10px;
        margin-bottom: 10px;
        margin-right: 10px;
        padding-left: 10px;
        padding-right: 10px;
      }

      .event-title {
        color: #74abda;
        font-size: 18px;
      }

      .info-events {
        text-align: center;
        height: 256px;
        overflow: hidden;
      }

      .info-events p {
        margin: 0;
      }



      .wrapper {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 10px;
      }

      .wrapper button {
        border: none;
        background: none;
        width: 128px;
        height: 115px;
      }

      .wrapper2 {
        display: grid;
        grid-template-columns: repeat(10, 0fr);
        grid-gap: 10px;
      }

      .wrapper2 div {
        width: 50px;
        height: 50px;
        border: dotted 1px;
      }

      .wrapper3 {
        display: grid;
        grid-template-columns: repeat(3, 0.2fr);
        grid-gap: 10px;
      }

      .wrapper3 div {
        width: 50px;
        height: 50px;
        border: dotted 1px;
      }

      .wrapper3 div p {
        width: 45px;
        position: absolute;
        text-align: right;
      }

      .absolute-container:hover {
        cursor: pointer;
      }

      .ship-wrapper {
        margin-bottom: 10px !important;
      }

      .absolute-container {
        position: absolute;
        padding-left: 8px;
        padding-top: 5px;
      }

      .ship-name,
      .ship-selected {
        width: 100px;
        background-color: black;
        text-align: center;
      }

      .ship-selected {
        margin-top: 60px;
      }

      .button-hangar {
        background: black;
        width: 150px;
        border: none;
      }

      .inventory-item {
        cursor: pointer;
      }

      .stats-container {
        position: absolute;
        left: -9999px;
      }

      .selected-config{
        border: solid white 1px !important;
      }













      /* The snackbar - position it at the bottom and in the middle of the screen */
      #snackbar {
        visibility: hidden;
        /* Hidden by default. Visible on click */
        min-width: 250px;
        /* Set a default minimum width */
        margin-left: -125px;
        /* Divide value of min-width by 2 */
        background-color: #333;
        /* Black background color */
        color: #fff;
        /* White text color */
        text-align: center;
        /* Centered text */
        border-radius: 2px;
        /* Rounded borders */
        padding: 16px;
        /* Padding */
        position: fixed;
        /* Sit on top of the screen */
        z-index: 1;
        /* Add a z-index if needed */
        left: 50%;
        /* Center the snackbar */
        bottom: 30px;
        /* 30px from the bottom */
      }

      /* Show the snackbar when clicking on a button (class added with JavaScript) */
      #snackbar.show {
        visibility: visible;
        /* Show the snackbar */
        /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
      }

      /* Animations to fade the snackbar in and out */
      @-webkit-keyframes fadein {
        from {
          bottom: 0;
          opacity: 0;
        }

        to {
          bottom: 30px;
          opacity: 1;
        }
      }

      @keyframes fadein {
        from {
          bottom: 0;
          opacity: 0;
        }

        to {
          bottom: 30px;
          opacity: 1;
        }
      }

      @-webkit-keyframes fadeout {
        from {
          bottom: 30px;
          opacity: 1;
        }

        to {
          bottom: 0;
          opacity: 0;
        }
      }

      @keyframes fadeout {
        from {
          bottom: 30px;
          opacity: 1;
        }

        to {
          bottom: 0;
          opacity: 0;
        }
      }







      /*
    
    
     RESPONSIVE 
    
    
    */
      .row::after {
        content: "";
        clear: both;
        display: table;
      }

      [class*="col-"] {
        float: left;
        padding: 15px;
      }

      /* For mobile phones: */
      [class*="col-"] {
        width: 100%;
      }

      @media only screen and (min-width: 600px) {

        /* For tablets: */
        .col-s-1 {
          width: 8.33%;
        }

        .col-s-2 {
          width: 16.66%;
        }

        .col-s-3 {
          width: 25%;
        }

        .col-s-4 {
          width: 33.33%;
        }

        .col-s-5 {
          width: 41.66%;
        }

        .col-s-6 {
          width: 50%;
        }

        .col-s-7 {
          width: 58.33%;
        }

        .col-s-8 {
          width: 66.66%;
        }

        .col-s-9 {
          width: 75%;
        }

        .col-s-10 {
          width: 83.33%;
        }

        .col-s-11 {
          width: 91.66%;
        }

        .col-s-12 {
          width: 100%;
        }
      }

      @media only screen and (min-width: 768px) {

        /* For desktop: */
        .col-1 {
          width: 8.33%;
        }

        .col-2 {
          width: 16.66%;
        }

        .col-3 {
          width: 25%;
        }

        .col-4 {
          width: 33.33%;
        }

        .col-5 {
          width: 41.66%;
        }

        .col-6 {
          width: 50%;
        }

        .col-7 {
          width: 58.33%;
        }

        .col-8 {
          width: 66.66%;
        }

        .col-9 {
          width: 75%;
        }

        .col-10 {
          width: 83.33%;
        }

        .col-11 {
          width: 91.66%;
        }

        .col-12 {
          width: 100%;
        }
      }
    </style>
  <?php } ?>

</head>

<body>