<?php
    include_once 'Models/AlunoModel.php';
    //$aluno = new AlunoModel();

    echo $_SESSION['idUser'];
    if (isset($_POST['senha'])) {


    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ACAU - Configurações</title>

  <!-- Bootstrap CSS -->
  <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
  crossorigin="anonymous"
/>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
  href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
  rel="stylesheet"
/>
  <!--Font Awesome Icons-->
  <script src="https://kit.fontawesome.com/c38b27744a.js" crossorigin="anonymous"></script>
  <!-- Estilo customizado -->
  <link rel="stylesheet" type="text/css" href="../css/configuracoes.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  
  </head>


  <body>

   <header><!--Início cabeçalho-->
      
      <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="login.html">Sair</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
        <i class="fa-solid fa-bars"></i>
        </button>
        <div
          class="collapse justify-content-end navbar-collapse"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="suporte.html">Suporte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="configuracoes.html">Configurações</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="forum.html">Fórum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fluxograma.html">Disciplinas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="guiadecarreira.html">Guia de Carreira</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    </header><!--Fim cabeçalho-->

  <h2>Mudar minha senha</h2>

  <div id="container" class="container1">


  </div>

    <div id="container" class="container2">
      
      <div id="message">
      <p id="length" class="invalid">Mínimo de <b>8</b> caracteres</p>
      <p id="number" class="invalid">Mínimo de <b> 1 </b> número</p>
      <p id="capital" class="invalid">Mínimo de <b> 1</b> letra maiúscula</p>
      <p id="symbol" class="invalid">Mínimo de <b>1</b> símbolo especial (@, #, $...)</p>
    </div>

    <div style="clear: both;">
      <button onclick="mudarSenha() ">MUDAR SENHA</button>
    </div>
    <div id="msg-erro" style="color:white;"></div>



  <!--Javascript -->
    <script type="text/javascript" src="../js/cadastro.js"></script>
    <script type="text/javascript" src="../js/configuracoes.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
