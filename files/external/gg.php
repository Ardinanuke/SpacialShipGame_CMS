<?php require_once(INCLUDES . 'header.php'); ?>

<div id="main">
  <div class="container">
    <div class="row">
      <div class="card white-text grey darken-4 padding-15">
        <div>
          <button class="btn grey darken-2" style="width: 140px">Alpha</button> <br><br>
          <button class="btn grey darken-2" style="width: 140px">Beta</button> <br><br>
          <button class="btn grey darken-2" style="width: 140px">Gamma</button> <br> <br>
          <button class="btn grey darken-2" style="width: 140px">Delta</button> <br> <br>
          <button class="btn grey darken-2" style="width: 140px">Zeta</button> <br> <br>
          <button class="btn grey darken-2" style="width: 140px">Hades</button> <br> <br>
        </div>
        <div style="background: black; padding: 10px">
          <p>Alpha Gate</p>
          <img src="<?php echo DOMAIN; ?>img/alpha.png" style="display:block;margin:auto;">
          <div>
            <p>Piezes: 0/34</p>
            <p>Free energy: 0</p>
            <button onclick="spin()" class="btn grey darken-1">100 Energy (200.000 U.) </button>
          </div>
        </div>
        <div style="background: black; padding: 10px">
          <p>Beta Gate</p>
          <img src="<?php echo DOMAIN; ?>img/beta.png" style="display:block;margin:auto;">
          <div>
            <p>Piezes: 0/48</p>
            <p>Free energy: 0</p>
            <button onclick="spin()" class="btn grey darken-1">100 Energy (200.000 U.) </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    var contador = 0;
    var piezes = 0;

    function spin() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'action=galaxygate',
        success: function(response) {

          contador += 200000;
          var json = jQuery.parseJSON(response);

          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            piezes += json.piezes;
        
            M.toast({
              html: html+" U:"+contador+" T: "+piezes
            });
          }
        }
      });
    }
  </script>
  <?php require_once(INCLUDES . 'footer.php'); ?>