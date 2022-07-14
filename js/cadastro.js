var senha = document.getElementById("psw");

/* Início barra de progresso */

const upload = () => {
  const progressBar = document.querySelector(".myBar");
  progressBar.setAttribute("id", "play-animation");
};

/* Fim barra de progresso */

/* Início contagem de caracteres no campo de senha */

senha.oninput = function() {
  maxCarac = 30;

  if (senha.value.length >= maxCarac) {
    senha.value = senha.value.substring(0, maxCarac);
  }
};

/* Fim contagem de caracteres no campo de senha */

/* Início validação da senha */

var symbol = document.getElementById("symbol");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// quando o usuário começa a digitar no campo de senha
senha.onkeyup = function () {
  // valida tamanho
  var tamanho = 8;

  if (senha.value.length >= tamanho) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }

  // valida números
  var numbers = /[0-9]/g;
  if (senha.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // valida letra maiúscula
  var upperCaseLetters = /[A-Z]/g;
  if (senha.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // valida símbolos
  var symbols = /[!@#$%¨&*()]/g;
  if (senha.value.match(symbols)) {
    symbol.classList.remove("invalid");
    symbol.classList.add("valid");
  } else {
    symbol.classList.remove("valid");
    symbol.classList.add("invalid");
  }
};

/* Fim validação da senha */
