<?php if (Functions::IsLoggedIn()) { ?>
  <script>
    const URL = "http://127.0.0.1/api/";
    const MIN_ITEMS = 1;
    /* constants lasers */
    const lasers = {
      LF1: 0,
      LF2: 1,
      LF3: 2,
    };
    /* constants generators */
    const generators = {
      G3N1010: 0,
      G3N2010: 1,
      G3N3210: 2,
      G3N3310: 3,
      G3N6900: 4,
      G3N7900: 5,
      SG3NA01: 6,
      SG3NA02: 7,
      SG3NA03: 8,
      SG3NB01: 9,
      SG3NB02: 10,
    };
    /* constants of items positions */
    const inventoryItem = {
      LF1: 0,
      LF2: 1,
      LF3: 2,
      G3N1010: 3,
      G3N2010: 4,
      G3N3210: 5,
      G3N3310: 6,
      G3N6900: 7,
      G3N7900: 8,
      SG3NA01: 9,
      SG3NA02: 10,
      SG3NA03: 11,
      SG3NB01: 12,
      SG3NB02: 12,
    };

    let inventoryItems = document.getElementsByClassName('inventory-item');

    let conf1Lasers = [];
    let conf1Generators = [];
    let conf2Lasers = [];
    let conf2Generators = [];


    /* Total lasers config 1 */
    let config1Lf1 = document.getElementsByClassName("total-config1-lf1");
    let config1Lf2 = document.getElementsByClassName("total-config1-lf2");
    let config1Lf3 = document.getElementsByClassName("total-config1-lf3");

    /* Total speed gen config 1 */
    let config1G3n1010 = document.getElementsByClassName("total-config1-g3n1010");
    let config1G3n2010 = document.getElementsByClassName("total-config1-g3n2010");
    let config1G3n3210 = document.getElementsByClassName("total-config1-g3n3210");
    let config1G3n3310 = document.getElementsByClassName("total-config1-g3n3310");
    let config1G3n6900 = document.getElementsByClassName("total-config1-g3n6900");
    let config1G3n7900 = document.getElementsByClassName("total-config1-g3n7900");

    /* Total shield gen config 1 */
    let config1Sg3na01 = document.getElementsByClassName("total-config1-sg3na01");
    let config1Sg3na02 = document.getElementsByClassName("total-config1-sg3na02");
    let config1Sg3na03 = document.getElementsByClassName("total-config1-sg3na03");
    let config1Sg3nb01 = document.getElementsByClassName("total-config1-sg3nb01");
    let config1Sg3nb02 = document.getElementsByClassName("total-config1-sg3nb02");

    /* Total lasers config 2 */
    let config2Lf1 = document.getElementsByClassName("total-config2-lf1");
    let config2Lf2 = document.getElementsByClassName("total-config2-lf2");
    let config2Lf3 = document.getElementsByClassName("total-config2-lf3");

    /* Total speed gen config 2 */
    let config2G3n1010 = document.getElementsByClassName("total-config2-g3n1010");
    let config2G3n2010 = document.getElementsByClassName("total-config2-g3n2010");
    let config2G3n3210 = document.getElementsByClassName("total-config2-g3n3210");
    let config2G3n3310 = document.getElementsByClassName("total-config2-g3n3310");
    let config2G3n6900 = document.getElementsByClassName("total-config2-g3n6900");
    let config2G3n7900 = document.getElementsByClassName("total-config2-g3n7900");

    /* Total shield gen config 2 */
    let config2Sg3na01 = document.getElementsByClassName("total-config2-sg3na01");
    let config2Sg3na02 = document.getElementsByClassName("total-config2-sg3na02");
    let config2Sg3na03 = document.getElementsByClassName("total-config2-sg3na03");
    let config2Sg3nb01 = document.getElementsByClassName("total-config2-sg3nb01");
    let config2Sg3nb02 = document.getElementsByClassName("total-config2-sg3nb02");
    
    loadHangar();

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
      let http = new XMLHttpRequest();
      let params = userParams;
      http.open("POST", URL, true);
      http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      http.onreadystatechange = function() {
        if (http.readyState == 4 && http.status == 200) {
          let json = jQuery.parseJSON(http.responseText);
          if (json.status) {
            showToast("ship succesfully changed", "green");
          } else if (json.message != "") {
            showToast(json.message, "red");
          }
        }
      };
      http.send(params);
    }

    function loadHangar() {
      /* 
      1.Load the stats of inventory
      2.Load the ship equipment
      */
      console.log("Loading inventory....");
      /* lasers */
      let quantityLf1 = document.getElementsByClassName("total-inventory-lf1");
      let quantityLf2 = document.getElementsByClassName("total-inventory-lf2");
      let quantityLf3 = document.getElementsByClassName("total-inventory-lf3");
      /* Speed gen */
      let quantityG3n1010 = document.getElementsByClassName("total-inventory-g3n1010");
      let quantityG3n2010 = document.getElementsByClassName("total-inventory-g3n2010");
      let quantityG3n3210 = document.getElementsByClassName("total-inventory-g3n3210");
      let quantityG3n3310 = document.getElementsByClassName("total-inventory-g3n3310");
      let quantityG3n6900 = document.getElementsByClassName("total-inventory-g3n6900");
      let quantityG3n7900 = document.getElementsByClassName("total-inventory-g3n7900");
      /* shield gen */
      let quantitySg3na01 = document.getElementsByClassName("total-inventory-sg3na01");
      let quantitySg3na02 = document.getElementsByClassName("total-inventory-sg3na02");
      let quantitySg3na03 = document.getElementsByClassName("total-inventory-sg3na03");
      let quantitySg3nb01 = document.getElementsByClassName("total-inventory-sg3nb01");
      let quantitySg3nb02 = document.getElementsByClassName("total-inventory-sg3nb02");

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

      conf1Lasers.push(config1Lf1[0].innerHTML);
      conf1Lasers.push(config1Lf2[0].innerHTML);
      conf1Lasers.push(config1Lf3[0].innerHTML);

      conf1Generators.push(config1G3n1010[0].innerHTML);
      conf1Generators.push(config1G3n2010[0].innerHTML);
      conf1Generators.push(config1G3n3210[0].innerHTML);
      conf1Generators.push(config1G3n3310[0].innerHTML);
      conf1Generators.push(config1G3n6900[0].innerHTML);
      conf1Generators.push(config1G3n7900[0].innerHTML);

      conf1Generators.push(config1Sg3na01[0].innerHTML);
      conf1Generators.push(config1Sg3na02[0].innerHTML);
      conf1Generators.push(config1Sg3na03[0].innerHTML);
      conf1Generators.push(config1Sg3nb01[0].innerHTML);
      conf1Generators.push(config1Sg3nb02[0].innerHTML);

      console.log("Loading equipment config2....");

      conf2Lasers.push(config2Lf1[0].innerHTML);
      conf2Lasers.push(config2Lf2[0].innerHTML);
      conf2Lasers.push(config2Lf3[0].innerHTML);

      conf2Generators.push(config2G3n1010[0].innerHTML);
      conf2Generators.push(config2G3n2010[0].innerHTML);
      conf2Generators.push(config2G3n3210[0].innerHTML);
      conf2Generators.push(config2G3n3310[0].innerHTML);
      conf2Generators.push(config2G3n6900[0].innerHTML);
      conf2Generators.push(config2G3n7900[0].innerHTML);

      conf2Generators.push(config2Sg3na01[0].innerHTML);
      conf2Generators.push(config2Sg3na02[0].innerHTML);
      conf2Generators.push(config2Sg3na03[0].innerHTML);
      conf2Generators.push(config2Sg3nb01[0].innerHTML);
      conf2Generators.push(config2Sg3nb02[0].innerHTML);

      console.log("[To-Do] Loading equipment (P.E.T. 15)....");
      /* To-Do */

      console.log("[In process] Showing the equipment....");
      /*
       * Algorith to show the equipment
       */
      let slotLasersConf1 = document.getElementById("lasers-conf1").children;
      let slotGeneratorsConf1 = document.getElementById("generators-conf1").children;
      let slotLasersConf2 = document.getElementById("lasers-conf2").children;
      let slotGeneratorsConf2 = document.getElementById("generators-conf2").children;

      conf1Lasers.forEach((value, index, array) => {
        if (value >= MIN_ITEMS) {
          for (let position = 0; position < value; position++) {
            switch (index) {
              case lasers.LF1:
                slotLasersConf1[position].innerHTML = "lf1";
                break;
              case lasers.LF2:
                slotLasersConf1[position].innerHTML = "lf2";
                break;
              case lasers.LF3:
                slotLasersConf1[position].innerHTML = "lf3";
                break;
            }
          }
        }
      });

      conf1Generators.forEach((value, index, array) => {
        if (value >= MIN_ITEMS) {
          for (let position = 0; position < value; position++) {
            switch (index) {
              case generators.G3N1010:
                slotGeneratorsConf1[position].innerHTML = "G3N1010";
                break;
              case generators.G3N2010:
                slotGeneratorsConf1[position].innerHTML = "G3N2010";
                break;
              case generators.G3N3210:
                slotGeneratorsConf1[position].innerHTML = "G3N3210";
                break;
              case generators.G3N3310:
                slotGeneratorsConf1[position].innerHTML = "G3N3310";
                break;
              case generators.G3N6900:
                slotGeneratorsConf1[position].innerHTML = "G3N6900";
                break;
              case generators.G3N7900:
                slotGeneratorsConf1[position].innerHTML = "G3N7900";
                break;
              case generators.SG3NA01:
                slotGeneratorsConf1[position].innerHTML = "SG3NA01";
                break;
              case generators.SG3NA02:
                slotGeneratorsConf1[position].innerHTML = "SG3NA02";
                break;
              case generators.SG3NA03:
                slotGeneratorsConf1[position].innerHTML = "SG3NA03";
                break;
              case generators.SG3NB01:
                slotGeneratorsConf1[position].innerHTML = "SG3NB01";
                break;
              case generators.SG3NB02:
                slotGeneratorsConf1[position].innerHTML = "SG3NB02";
                break;
            }
          }
        }
      });

      conf2Lasers.forEach((value, index, array) => {
        if (value >= MIN_ITEMS) {
          for (let position = 0; position < value; position++) {
            switch (index) {
              case lasers.LF1:
                slotLasersConf2[position].innerHTML = "lf1";
                break;
              case lasers.LF2:
                slotLasersConf2[position].innerHTML = "lf2";
                break;
              case lasers.LF3:
                slotLasersConf2[position].innerHTML = "lf3";
                break;
            }
          }
        }
      });

      conf2Generators.forEach((value, index, array) => {
        if (value >= MIN_ITEMS) {
          for (let position = 0; position < value; position++) {
            switch (index) {
              case generators.G3N1010:
                slotGeneratorsConf2[position].innerHTML = "G3N1010";
                break;
              case generators.G3N2010:
                slotGeneratorsConf2[position].innerHTML = "G3N2010";
                break;
              case generators.G3N3210:
                slotGeneratorsConf2[position].innerHTML = "G3N3210";
                break;
              case generators.G3N3310:
                slotGeneratorsConf2[position].innerHTML = "G3N3310";
                break;
              case generators.G3N6900:
                slotGeneratorsConf2[position].innerHTML = "G3N6900";
                break;
              case generators.G3N7900:
                slotGeneratorsConf2[position].innerHTML = "G3N7900";
                break;
              case generators.SG3NA01:
                slotGeneratorsConf2[position].innerHTML = "SG3NA01";
                break;
              case generators.SG3NA02:
                slotGeneratorsConf2[position].innerHTML = "SG3NA02";
                break;
              case generators.SG3NA03:
                slotGeneratorsConf2[position].innerHTML = "SG3NA03";
                break;
              case generators.SG3NB01:
                slotGeneratorsConf2[position].innerHTML = "SG3NB01";
                break;
              case generators.SG3NB02:
                slotGeneratorsConf2[position].innerHTML = "SG3NB02";
                break;
            }
          }
        }
      });
    }

    function showToast(text, color) {
      let alert = document.getElementById("snackbar");
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