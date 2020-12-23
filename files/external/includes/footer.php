<?php if (Functions::IsLoggedIn()) { ?>
  <script>
    let url = "http://127.0.0.1/api/";

    function changeShip(shipId) {
      console.log(shipId);

    }

    function showToast(text, color) {
      var alert = document.getElementById("snackbar");
      alert.className = "show";
      alert.innerHTML = text;
      alert.style.backgroundColor = color;
      setTimeout(function() {
        alert.className = alert.className.replace("show", "");
      }, 3000);
    }
  </script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

<?php } ?>
<?php if (!Functions::IsLoggedIn()) { ?>
  <!--====== Javascripts & Jquery ======-->
  <script src="<?php echo DOMAIN; ?>js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo DOMAIN; ?>js/bootstrap.min.js"></script>
  <script src="<?php echo DOMAIN; ?>js/owl.carousel.min.js"></script>
  <script src="<?php echo DOMAIN; ?>js/jquery.marquee.min.js"></script>
  <script src="<?php echo DOMAIN; ?>js/main2.js"></script>
  <!-- IF loggin == true remove this -->
  <script src="<?php echo DOMAIN; ?>js/custom_script.js"></script>
  <!-- END IF -->
<?php } ?>
</body>

</html>