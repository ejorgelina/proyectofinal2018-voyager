
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  var w = document.forms["myForm"]["email"].value;
  var z = document.forms["myForm"]["password"].value;
  var y = document.forms["myForm"]["password-confirm"].value;

  if (x == "" || w == "" || z == "" || y == "") {
    alert("Por favor completa todos los datos solicitados.");
    return false;
  }
}

function validarName () {
  var text1;
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    text1 = "Por favor completa tu nombre.";
  } else {
    text1 = '';
  }
  document.getElementById("demo1").innerHTML = text1;
}


function validarMail () {
  var text;
  var w = document.forms["myForm"]["email"].value;
  var regexMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  if (w == "") {
    text = "Completa tu email.";
  } else if (!regexMail.test(w)) {
    text = "Email no válido.";
  } else {
    text = '';
  }
  document.getElementById("demo").innerHTML = text;
}

function validarPass () {
  var text3;
  var z = document.forms["myForm"]["password"].value;
  if (z == "") {
    text2 = "La contraseña es obligatoria.";
  } else if (z.length <= 7 ) {
    text2 = "Contraseña demasiado corta.";
  } else {
    text2 = '';
  }
  document.getElementById("demo2").innerHTML = text2;
}

function validarPassConfirm () {
  var text4;
  var z = document.forms["myForm"]["password"].value;
  var y = document.forms["myForm"]["password-confirm"].value;

  if (y == "") {
    text4 = "Confirmá la contraseña.";
  } else if (y != z) {
    text4 = "Las contraseñas no coinciden";
  }
  else {
    text4 = '';
  }

  document.getElementById("demo4").innerHTML = text4;
}

var campoEmail = document.getElementById("email");
var campoNombre = document.getElementById("name");
var campoPass = document.getElementById("password");
var campoConfirm = document.getElementById("password-confirm");

campoNombre.onblur = validarName;
campoEmail.onblur = validarMail;
campoPass.onblur = validarPass;
campoConfirm.onblur = validarPassConfirm;
