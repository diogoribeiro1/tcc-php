<?php
include_once 'Models/AlunoModel.php';
session_start();

    if(isset($_POST['id']) && isset($_POST['senha'])) {
    $idaluno = $_POST['id'];
    $senha = $_POST['senha'];

    $_SESSION['idUser'] = $idaluno;
    $aluno = new AlunoModel();

    $obj = $aluno->getByIdaluno($idaluno);
    $_SESSION['nomeUser']  = $obj['nome'];

    $novasenha = $aluno->getByIdAndSenha($idaluno);

    $senhaDescriptografada = base64_decode($novasenha['senha']);

    $_SESSION['senhaUser'] = $senhaDescriptografada;

        if($senhaDescriptografada == $senha){
            header('location: pages/index.html');
        }else{
           echo "<script>alert('Usuário não encontrado')</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ACAU - Login</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Estilo customizado -->
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div id="container">

		<img src="../imagens/logo.png">

      <form method="post" action="../index.php" name="login-form">
        <div class="div_nome">
          <i class="fa fa-user icon"></i>
          <input
            type="text"
            class="id"
            name="id"
            id="id"
            placeholder="ID"
            required
          />
        </div>

        <div class="div_senha">
          <i class="fa fa-key icon"></i>
          <input
            type="password"
            class="senha"
            name="senha"
            id="senha"
            placeholder="Senha"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            minlength="8"
            required
          />
        </div>

        <div>
          <button class="submit" type="submit">ENTRAR</button>
        </div>

        <div>
          <a href="cadastro.php">Criar uma conta</a>
        </div>
      </form>
    </div>
</body>
</html>
