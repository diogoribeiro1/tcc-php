var password = document.getElementById("psw")
  , confirm_password = document.getElementById("confirm_password");

  function mudarSenha(){
  if(password.value != confirm_password.value) {
    document.getElementById('msg-erro').innerHTML = ("As senhas estão diferentes. Por favor, tente novamente.");
  } 
}