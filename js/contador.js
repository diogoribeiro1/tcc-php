//Contador

var contadorDataFinal = new Date("July 18, 2022 23:30:00").getTime();

var segundosUpdate = setInterval(function() {
  var agora = new Date().getTime();
  var diferenca = contadorDataFinal - agora;

  var dias = Math.floor(diferenca / (1000 * 60 * 60 * 24));
  var horas = Math.floor((diferenca % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutos = Math.floor((diferenca % (1000 * 60 * 60)) / (1000 * 60));
  var segundos = Math.floor((diferenca % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("contador").innerHTML = dias + "d " + horas + "h "
  + minutos + "m " + segundos + "s ";
    
  // If the count down is over, write some text 
  if (diferenca < 0) {
    clearInterval(segundosUpdate);
    document.getElementById("contador").innerHTML = "Seu semestre já acabou!";
  }
}, 1000);
