<?php if (Functions::IsLoggedIn()) { ?>
  <script>
    let url = "http://127.0.0.1/api/";

    var inventoryItems = document.getElementsByClassName('inventory-item');

    loadHangar();
    
    function loadHangar(){
      /* 
      1.Load the stats of inventory
      2.Load the ship equipment
      */
      console.log("im trying to open the hangar");
      /* lasers */
      var quantityLf1 = document.getElementsByClassName("total-inventory-lf1");
      var quantityLf2 = document.getElementsByClassName("total-inventory-lf2");
      var quantityLf3 = document.getElementsByClassName("total-inventory-lf3");
      /* Speed gen */
      var quantityG3n1010 = document.getElementsByClassName("total-inventory-g3n1010");
      var quantityG3n2010 = document.getElementsByClassName("total-inventory-g3n2010");
      var quantityG3n3210 = document.getElementsByClassName("total-inventory-g3n3210");
      var quantityG3n3310 = document.getElementsByClassName("total-inventory-g3n3310");
      var quantityG3n6900 = document.getElementsByClassName("total-inventory-g3n6900");
      var quantityG3n7900 = document.getElementsByClassName("total-inventory-g3n7900");
      /* shield gen */
      var quantitySg3na01 = document.getElementsByClassName("total-inventory-sg3na01");
      var quantitySg3na02 = document.getElementsByClassName("total-inventory-sg3na02");
      var quantitySg3na03 = document.getElementsByClassName("total-inventory-sg3na03");
      var quantitySg3nb01 = document.getElementsByClassName("total-inventory-sg3nb01");
      var quantitySg3nb02 = document.getElementsByClassName("total-inventory-sg3nb02");

      /* Update lasers */
      inventoryItems[0].getElementsByClassName("quantity-item")[0].innerHTML = quantityLf1[0].innerHTML;
      inventoryItems[1].getElementsByClassName("quantity-item")[0].innerHTML = quantityLf2[0].innerHTML;
      inventoryItems[2].getElementsByClassName("quantity-item")[0].innerHTML = quantityLf3[0].innerHTML;
      /* Update speed gen */
      inventoryItems[3].getElementsByClassName("quantity-item")[0].innerHTML = quantityG3n1010[0].innerHTML;
      inventoryItems[4].getElementsByClassName("quantity-item")[0].innerHTML = quantityG3n2010[0].innerHTML;
      inventoryItems[5].getElementsByClassName("quantity-item")[0].innerHTML = quantityG3n3210[0].innerHTML;
      inventoryItems[6].getElementsByClassName("quantity-item")[0].innerHTML = quantityG3n3310[0].innerHTML;
      inventoryItems[7].getElementsByClassName("quantity-item")[0].innerHTML = quantityG3n6900[0].innerHTML;
      inventoryItems[8].getElementsByClassName("quantity-item")[0].innerHTML = quantityG3n7900[0].innerHTML;

    }

    /*
    Website functions
    */
    function changeShip(shipId) {
      changeShipAPI(`shipId=${shipId}&action=change_ship`);
    }

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