<?php if (Functions::IsLoggedIn()) { ?>
  <script>

    const URL = "http://127.0.0.1/api/";
    const MIN_ITEMS = 1;
    
    let inventoryItems = document.getElementsByClassName('inventory-item');
    let equipmentConfig1 = [];
    let equipmentConfig2 = [];


    loadHangar();

    function loadHangar() {
      /* 
      1.Load the stats of inventory
      2.Load the ship equipment
      */
      console.log("Loading inventory....");
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
      /* Update shield gen */
      inventoryItems[9].getElementsByClassName("quantity-item")[0].innerHTML = quantitySg3na01[0].innerHTML;
      inventoryItems[10].getElementsByClassName("quantity-item")[0].innerHTML = quantitySg3na02[0].innerHTML;
      inventoryItems[11].getElementsByClassName("quantity-item")[0].innerHTML = quantitySg3na03[0].innerHTML;
      inventoryItems[12].getElementsByClassName("quantity-item")[0].innerHTML = quantitySg3nb01[0].innerHTML;
      inventoryItems[13].getElementsByClassName("quantity-item")[0].innerHTML = quantitySg3nb02[0].innerHTML;

      console.log("Loading equipment config1....");
      /* Total lasers config 1 */
      var config1Lf1 = document.getElementsByClassName("total-config1-lf1");
      var config1Lf2 = document.getElementsByClassName("total-config1-lf2");
      var config1Lf3 = document.getElementsByClassName("total-config1-lf3");

      /* Total speed gen config 1 */
      var config1G3n1010 = document.getElementsByClassName("total-config1-g3n1010");
      var config1G3n2010 = document.getElementsByClassName("total-config1-g3n2010");
      var config1G3n3210 = document.getElementsByClassName("total-config1-g3n3210");
      var config1G3n3310 = document.getElementsByClassName("total-config1-g3n3310");
      var config1G3n6900 = document.getElementsByClassName("total-config1-g3n6900");
      var config1G3n7900 = document.getElementsByClassName("total-config1-g3n7900");

      /* Total shield gen config 1 */
      var config1Sg3na01 = document.getElementsByClassName("total-config1-sg3na01");
      var config1Sg3na02 = document.getElementsByClassName("total-config1-sg3na02");
      var config1Sg3na03 = document.getElementsByClassName("total-config1-sg3na03");
      var config1Sg3nb01 = document.getElementsByClassName("total-config1-sg3nb01");
      var config1Sg3nb02 = document.getElementsByClassName("total-config1-sg3nb02");

      equipmentConfig1.push(config1Lf1[0].innerHTML);
      equipmentConfig1.push(config1Lf2[0].innerHTML);
      equipmentConfig1.push(config1Lf3[0].innerHTML);

      equipmentConfig1.push(config1G3n1010[0].innerHTML);
      equipmentConfig1.push(config1G3n2010[0].innerHTML);
      equipmentConfig1.push(config1G3n3210[0].innerHTML);
      equipmentConfig1.push(config1G3n3310[0].innerHTML);
      equipmentConfig1.push(config1G3n6900[0].innerHTML);
      equipmentConfig1.push(config1G3n7900[0].innerHTML);

      equipmentConfig1.push(config1Sg3na01[0].innerHTML);
      equipmentConfig1.push(config1Sg3na02[0].innerHTML);
      equipmentConfig1.push(config1Sg3na03[0].innerHTML);
      equipmentConfig1.push(config1Sg3nb01[0].innerHTML);
      equipmentConfig1.push(config1Sg3nb02[0].innerHTML);

      console.log("Loading equipment config2....");
      /* Total lasers config 2 */
      var config2Lf1 = document.getElementsByClassName("total-config2-lf1");
      var config2Lf2 = document.getElementsByClassName("total-config2-lf2");
      var config2Lf3 = document.getElementsByClassName("total-config2-lf3");

      /* Total speed gen config 2 */
      var config2G3n1010 = document.getElementsByClassName("total-config2-g3n1010");
      var config2G3n2010 = document.getElementsByClassName("total-config2-g3n2010");
      var config2G3n3210 = document.getElementsByClassName("total-config2-g3n3210");
      var config2G3n3310 = document.getElementsByClassName("total-config2-g3n3310");
      var config2G3n6900 = document.getElementsByClassName("total-config2-g3n6900");
      var config2G3n7900 = document.getElementsByClassName("total-config2-g3n7900");

      /* Total shield gen config 2 */
      var config2Sg3na01 = document.getElementsByClassName("total-config2-sg3na01");
      var config2Sg3na02 = document.getElementsByClassName("total-config2-sg3na02");
      var config2Sg3na03 = document.getElementsByClassName("total-config2-sg3na03");
      var config2Sg3nb01 = document.getElementsByClassName("total-config2-sg3nb01");
      var config2Sg3nb02 = document.getElementsByClassName("total-config2-sg3nb02");

      equipmentConfig2.push(config2Lf1[0].innerHTML);
      equipmentConfig2.push(config2Lf2[0].innerHTML);
      equipmentConfig2.push(config2Lf3[0].innerHTML);

      equipmentConfig2.push(config2G3n1010[0].innerHTML);
      equipmentConfig2.push(config2G3n2010[0].innerHTML);
      equipmentConfig2.push(config2G3n3210[0].innerHTML);
      equipmentConfig2.push(config2G3n3310[0].innerHTML);
      equipmentConfig2.push(config2G3n6900[0].innerHTML);
      equipmentConfig2.push(config2G3n7900[0].innerHTML);

      equipmentConfig2.push(config2Sg3na01[0].innerHTML);
      equipmentConfig2.push(config2Sg3na02[0].innerHTML);
      equipmentConfig2.push(config2Sg3na03[0].innerHTML);
      equipmentConfig2.push(config2Sg3nb01[0].innerHTML);
      equipmentConfig2.push(config2Sg3nb02[0].innerHTML);

      console.log("[To-Do] Loading equipment (P.E.T. 15)....");

      console.log("[In process] Showing the equipment....");
      /**
       * Algorith to show the equipment
       * 
       * 2. Add all to array
       * 2. in a for loop if anyone is >= 1 add the image to slot.
       */
      var slotLasersConf1 = document.getElementById("lasers-conf1").children;
      var slotGeneratorsConf1 = document.getElementById("generators-conf1").children;
      var slotLasersConf2 = document.getElementById("lasers-conf2").children;
      var slotGeneratorsConf2 = document.getElementById("generators-conf2").children;
      /*slotLasersConf1[0].innerHTML = "lol";*/
      equipmentConfig1.forEach((value, index, array) => {
        if (value >= MIN_ITEMS) {
          for(let position = 0; position < value; position++){
            slotLasersConf1[position].innerHTML = "laser";
          }
        }
      });
    }

    /*
    Website functions
    */
    function changeShip(shipId) {
      changeShipAPI(`shipId=${shipId}&action=change_ship`);
    }

    function selectInventoryItem(itemId) {
      let quantityItems = inventoryItems[itemId].getElementsByClassName("quantity-item")[0].innerHTML;
      if (quantityItems != 0) {
        /* 
        Algorithm to add item to inventory 
        1. Check in the server if the player have the item
        2. Add to the grid
        */
        inventoryItems[itemId].getElementsByClassName("quantity-item")[0].innerHTML = quantityItems - 1;
      } else {
        showToast("you haven't this item", "red");
      }
    }

    /*
     API USAGE 
    */
    function changeShipAPI(userParams) {
      var http = new XMLHttpRequest();
      var params = userParams;
      http.open("POST", URL, true);
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