let url = "http://127.0.0.1/api/";

//Login form
let username = document.getElementById("username");
let password = document.getElementById("password");

//Recaptcha
let containerLoader = document.getElementById("container_loader");
let containerCaptcha = document.getElementById("container_captcha");
let containerCaptcha2 = document.getElementById("container_captcha2");
let containerCaptcha3 = document.getElementById("container_captcha3");
//Form errors
let error = document.getElementById("error-form1");
let error2 = document.getElementById("error-form2");
let error3 = document.getElementById("error-form3");
let error4 = document.getElementById("error-form4");
//Register form
let usernamer = document.getElementById("username-r");
let emailr = document.getElementById("email-r");
let passwordr = document.getElementById("password-r");
let password2r = document.getElementById("password2-r");
//Other vars
let switchBool = true;
let modal = document.getElementById("myModal");
let btn = document.getElementById("myBtn");
let span = document.getElementsByClassName("close")[0];
let formContainer = document.getElementById("form_container");
let formContainer2 = document.getElementById("form_container2");

function switchView() {
  if (switchBool) {
    switchBool = false;
    formContainer.style.display = "none";
    formContainer.style.position = "absolute";
    formContainer2.style.display = "block";
    formContainer2.style.position = "initial";
  } else {
    switchBool = true;
    formContainer2.style.display = "none";
    formContainer2.style.position = "absolute";
    formContainer.style.display = "block";
    formContainer.style.position = "initial";
  }
}

function sendRegister() {
  if (grecaptcha.getResponse() == "") {
    showToast("Hey, please verify the G-Recaptcha", "red");
  } else {
    console.log(
      `username=${usernamer.value}&password=${passwordr.value}&password_confirm=${password2r.value}&email=${emailr.value}&action=register`
    );
    if (password2r.value == passwordr.value) {
      if (validateEmail(emailr.value)) {
        registerAccount(
          `username=${usernamer.value}&password=${passwordr.value}&password_confirm=${password2r.value}&email=${emailr.value}&action=register`
        );
      } else {
        showToast("Please put a valid email", "red");
      }
    } else {
      showToast("The passwords aren't equals", "red");
    }
  }
}
function loginFunction() {
  if (username.value != "" && password.value != "") {
    loginAccount(
      `username=${username.value}&password=${password.value}&action=login`
    );
  } else {
    showToast("Empty values", "red");
  }
}

function showToast(text, color) {
  var x = document.getElementById("snackbar");
  x.className = "show";
  x.innerHTML = text;
  x.style.backgroundColor = color;
  setTimeout(function () {
    x.className = x.className.replace("show", "");
  }, 3000);
}

btn.onclick = function () {
  modal.style.display = "block";
};

span.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

document.addEventListener(
  "click",
  function (event) {
    var videoId = event.target.getAttribute("data-video");
    if (!videoId) return;
    var iframe = document.createElement("div");
    iframe.innerHTML =
      '<p>x</p><iframe width="100%" height="646" src="https://www.youtube.com/embed/' +
      videoId +
      '?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
    var video = iframe.childNodes[1];

    event.target.parentNode.replaceChild(video, event.target);

    video.requestFullscreen();
  },
  false
);

/* API */

function registerAccount(userParams) {
  /* reset */
  usernamer.classList.remove("form_error");
  emailr.classList.remove("form_error");
  passwordr.classList.remove("form_error");
  password2r.classList.remove("form_error");
  containerCaptcha.style.visibility = "hidden";
  containerCaptcha.style.position = "absolute";
  containerCaptcha2.style.visibility = "hidden";
  containerCaptcha2.style.position = "absolute";
  containerCaptcha3.style.visibility = "hidden";
  containerCaptcha3.style.position = "absolute";
  containerLoader.style.display = "block";
  containerLoader.style.position = "initial";

  var http = new XMLHttpRequest();
  var params = userParams;
  http.open("POST", url, true);
  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.onreadystatechange = function () {
    if (http.readyState == 4 && http.status == 200) {
      var json = jQuery.parseJSON(http.responseText);
      for (var input in json.inputs) {
        /* Shor specific error */
        if (json.inputs[input].validate == "invalid") {
          switch (input) {
            case "username":
              usernamer.classList.add("form_error");
              error.style.position = "initial";
              error.style.visibility = "initial";
              break;
            case "password":
              passwordr.classList.add("form_error");
              /* error3.style.position = "initial";
              error3.style.visibility = "initial"; */
              break;
            case "password_confirm":
              password2r.classList.add("form_error");
              /* error4.style.position = "initial";
              error4.style.visibility = "initial"; */
              break;
            case "email":
              emailr.classList.add("form_error");
              /*
              error2.style.position = "initial";
              error2.style.visibility = "initial"; */
              break;
          }
        }
      }
      if (json.message != "") {
        usernamer.classList.remove("form_error");
        emailr.classList.remove("form_error");
        passwordr.classList.remove("form_error");
        password2r.classList.remove("form_error");

        error.style.position = "absolute";
        error.style.visibility = "hidden";
        /*error2.style.position = "absolute";
        error2.style.visibility = "hidden";
        error3.style.position = "absolute";
        error3.style.visibility = "hidden";
        error4.style.position = "absolute";
        error4.style.visibility = "hidden";*/

        if (
          json.message != "This username is already taken." &&
          json.message != "This EMAIL is already taken."
        ) {
          showToast(json.message, "green");
        } else {
          showToast(json.message, "red");
        }
      }
    }
    containerLoader.style.display = "none";
    containerLoader.style.position = "absolute";
    containerCaptcha.style.visibility = "initial";
    containerCaptcha.style.position = "initial";
    containerCaptcha2.style.visibility = "initial";
    containerCaptcha2.style.position = "initial";
    containerCaptcha3.style.visibility = "initial";
    containerCaptcha3.style.position = "initial";
  };
  http.send(params);
}

function loginAccount(userParams) {
  var http = new XMLHttpRequest();
  var params = userParams;
  http.open("POST", url, true);
  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.onreadystatechange = function () {
    if (http.readyState == 4 && http.status == 200) {
      var json = jQuery.parseJSON(http.responseText);
      if (json.status) {
        location.reload();
      } else if (json.message != "") {
        if (json.toastAction != "") {
          json.message += json.toastAction;
        }
        showToast(json.message, "red");
      }
    }
  };
  http.send(params);
}

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
