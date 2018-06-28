function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  var y = document.forms["myForm"]["email"].value;
  var z = document.forms["myForm"]["password"].value;

  if (x == "" || y == "" || z == "") {
    alert("Por favor completa todos los datos solicitados.");
    return false;
  }
}

function validarMail () {
  var text;
  var w = document.getElementById("email").value;

  var regexMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

  if (!regexMail.test(x)) {
    text = "Email no válido.";
  } else {
    text = '';
  }
}

  document.getElementById("demo").innerHTML = text;

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

  function validarPass () {
  var text3;
    var z = document.forms["myForm"]["password"].value;
  if (z == "") {
    text2 = "El password es obligatorio.";
  } else {
    text2 = '';
  }

  document.getElementById("demo2").innerHTML = text2;

}

var campoEmail = document.getElementById("email");
var campoNombre = document.getElementById("name");
var campoPass = document.getElementById("password");

campoEmail.onblur = validarMail;
campoNombre.onblur = validarName;
campoPass.onblur = validarPass;
