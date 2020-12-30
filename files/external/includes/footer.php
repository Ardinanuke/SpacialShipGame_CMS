<?php if (Functions::IsLoggedIn()) { ?>
  <script>
    let url = "http://127.0.0.1/api/";

    var inventoryItems = document.getElementsByClassName('inventory-item');

    function changeShip(shipId) {
      changeShipAPI(`shipId=${shipId}&action=change_ship`);
    }

    /*
    Website functions
    */
    function selectInventoryItem(itemId){
      let quantityItems = inventoryItems[itemId].getElementsByClassName("quantity-item")[0].innerHTML;
      if(quantityItems != 0){
        /* 
        Algorithm to add item to inventory 
        1. Check in the server if the player have the item
        2. Add to the grid
        */
        inventoryItems[itemId].getElementsByClassName("quantity-item")[0].innerHTML = quantityItems - 1;

      }else{
        showToast("you haven't this item", "red");
      }
      /*
      console.log(`He seleccionado ${itemId}`);
      inventoryItems[0].getElementsByClassName("quantity-item")[0].innerHTML = "hola";
      console.log(inventoryItems); */
    }

    /*
     API USAGE 
    */
    function changeShipAPI(userParams) {
      var http = new XMLHttpRequest();
      var params = userParams;
      http.open("POST", url, true);
      http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      http.onreadystatechange = function() {
        if (http.readyState == 4 && http.status == 200) {
          var json = jQuery.parseJSON(http.responseText);
          if (json.status) {
            showToast("ship succesfully changed", "green");
          } else if (json.message != "") {
            showToast(json.message, "red");
          }
        }
      };
      http.send(params);
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