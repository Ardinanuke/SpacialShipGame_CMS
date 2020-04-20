
    /* Alfa */
    let piezes1 = document.getElementById("piezes1");
    let botonspin1 = document.getElementById("botonspin1");
    let contenedor1 = document.getElementById("contenedor_gg1");
    let switch1 = true;
    /* Beta */
    let piezes2 = document.getElementById("piezes2");
    let botonspin2 = document.getElementById("botonspin2");
    let contenedor2 = document.getElementById("contenedor_gg2");
    let switch2 = true;
    /* Gamma */
    let piezes3 = document.getElementById("piezes3");
    let botonspin3 = document.getElementById("botonspin3");
    let contenedor3 = document.getElementById("contenedor_gg3");
    let switch3 = true;
    /* Delta */
    let piezes4 = document.getElementById("piezes4");
    let botonspin4 = document.getElementById("botonspin4");
    let contenedor4 = document.getElementById("contenedor_gg4");
    let switch4 = true;
    /* Epsilon */
    let piezes5 = document.getElementById("piezes5");
    let botonspin5 = document.getElementById("botonspin5");
    let contenedor5 = document.getElementById("contenedor_gg5");
    let switch5 = true;
    /* Zeta */
    let piezes6 = document.getElementById("piezes6");
    let botonspin6 = document.getElementById("botonspin6");
    let contenedor6 = document.getElementById("contenedor_gg6");
    let switch6 = true;

    function spin1() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=1&action=galaxygate',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            if (json.piezes >= 34) {
              json.piezes = 34;
              piezes1.innerHTML = `Parts: 34/34`;
              if (switch1) {
                botonspin1.style.display = "none";
                contenedor1.innerHTML += '<button onclick="build1()" class="btn grey darken-1" id="launch1">BUILD</button>';
                switch1 = false;
              }
            }
            piezes1.innerHTML = `Parts: ${json.piezes}/34`;
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function spin2() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=2&action=galaxygate',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            if (json.piezes >= 48) {
              json.piezes = 48;
              piezes2.innerHTML = `Parts: 48/48`;

              if (switch2) {
                botonspin2.style.display = "none";
                contenedor2.innerHTML += '<button onclick="build2()" class="btn grey darken-1" id="launch2">BUILD</button>';
                switch2 = false;
              }
            }
            piezes2.innerHTML = `Parts: ${json.piezes}/48`;
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function spin3() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=3&action=galaxygate',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            if (json.piezes >= 82) {
              json.piezes = 82;
              piezes3.innerHTML = `Parts: 82/82`;

              if (switch3) {
                botonspin3.style.display = "none";
                contenedor3.innerHTML += '<button onclick="build3()" class="btn grey darken-1" id="launch3">BUILD</button>';
                switch3 = false;
              }
            }
            piezes3.innerHTML = `Parts: ${json.piezes}/82`;
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function spin4() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=4&action=galaxygate',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {

            var html = '<span>' + json.message + ' </span>';

            if (json.piezes >= 128) {
              json.piezes = 128;
              piezes4.innerHTML = `Parts: 128/128`;

              if (switch4) {
                botonspin4.style.display = "none";
                contenedor4.innerHTML += '<button onclick="build4()" class="btn grey darken-1" id="launch4">BUILD</button>';
                switch4 = false;
              }
            }

            piezes4.innerHTML = `Parts: ${json.piezes}/128`;

            M.toast({
              html: html
            });
          }
        }
      });
    }

    function spin5() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=5&action=galaxygate',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {

            var html = '<span>' + json.message + ' </span>';

            if (json.piezes >= 99) {
              json.piezes = 99;
              piezes5.innerHTML = `Parts: 99/99`;

              if (switch5) {
                botonspin5.style.display = "none";
                contenedor5.innerHTML += '<button onclick="build5()" class="btn grey darken-1" id="launch5">BUILD</button>';
                switch5 = false;
              }
            }

            piezes5.innerHTML = `Parts: ${json.piezes}/99`;

            M.toast({
              html: html
            });
          }
        }
      });
    }
    
    function spin6() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=6&action=galaxygate',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {

            var html = '<span>' + json.message + ' </span>';

            if (json.piezes >= 111) {
              json.piezes = 111;
              piezes6.innerHTML = `Parts: 111/111`;

              if (switch6) {
                botonspin6.style.display = "none";
                contenedor6.innerHTML += '<button onclick="build6()" class="btn grey darken-1" id="launch6">BUILD</button>';
                switch6 = false;
              }
            }

            piezes6.innerHTML = `Parts: ${json.piezes}/111`;

            M.toast({
              html: html
            });
          }
        }
      });
    }

    function build1() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=1&action=buildergg',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            let launch1 = document.getElementById("launch1");
            launch1.style.display = "none";
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function build2() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=2&action=buildergg',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            let launch2 = document.getElementById("launch2");
            launch2.style.display = "none";
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function build3() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=3&action=buildergg',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            let launch3 = document.getElementById("launch3");
            launch3.style.display = "none";
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function build4() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=4&action=buildergg',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            let launch4 = document.getElementById("launch4");
            launch4.style.display = "none";
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function build5() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=5&action=buildergg',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            let launch5 = document.getElementById("launch5");
            launch5.style.display = "none";
            M.toast({
              html: html
            });
          }
        }
      });
    }

    function build6() {
      $.ajax({
        type: 'POST',
        url: '<?php echo DOMAIN; ?>api/',
        data: 'gate=6&action=buildergg',
        success: function(response) {
          var json = jQuery.parseJSON(response);
          if (json.message != '') {
            var html = '<span>' + json.message + ' </span>';
            let launch6 = document.getElementById("launch6");
            launch6.style.display = "none";
            M.toast({
              html: html
            });
          }
        }
      });
    }