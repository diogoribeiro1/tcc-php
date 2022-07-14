<?php
//include_once 'Models/AlunoModel.php';
session_start();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ACAU - Fórum</title>

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
    <script
      src="https://kit.fontawesome.com/c38b27744a.js"
      crossorigin="anonymous"
    ></script>
    <script type="module" src="js/postagens.js"></script>
    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/forum.css" />
    <link rel="stylesheet" href="css/modalComments.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>

  <body>
    <header>
      <!--Início cabeçalho-->

      <!--navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="/index.php">Sair</a>
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
                <a class="nav-link" href="pages/index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/suporte.html">Suporte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="configuracoes.php"
                  >Configurações</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="forum.html"
                  >Fórum</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/fluxograma.html">Disciplinas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/guiadecarreira.html"
                  >Guia de Carreira</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--navbar end-->
    </header>
    <!--Fim cabeçalho-->
    <div class="container mw-100">
      <div class="row mt-5">
        <div class="col-3 px-4 lateral">
          <!--Início div lateral -->
          <div class="info sticky-top">
            <div class="">
                <?php echo "<h4 class='nomeSocial mt-5 pb-3'>".$_SESSION['nomeUser']."</h4>";
                ?>
              <h4 class="cursoNome pb-3">Desenvolvimento de Sistemas</h4>
              <a class="minhasPostagens pb-4" href="#">Minhas postagens</a>
              <p class="regras pt-4 text-center">Regras</p>
              <ol class="px-3 lh-lg">
                <li class="pb-4">Não é permitido ferir os direitos humanos.</li>
                <li class="pb-4">
                  Não é permitido usar palavras de baixo calão.
                </li>
                <li class="pb-4">
                  Não é permitido ofender colegas, professores ou a instituição
                  de ensino.
                </li>
                <li class="pb-4">Não é permitido fazer anúncios.</li>
              </ol>
            </div>
          </div>
        </div>
        <!--Fim div lateral -->
        <div class="central col-9">
          <div class="forum" id="postagens"></div>
          <div class="position-relative">
            <!-- Button trigger modal -->
            <button
              type="button"
              class="btn btn-lg createPostBtn"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              <i class="fa-solid fa-lg fa-plus"></i>
            </button>
          </div>

          <!-- Modal -->
          <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modalCreatePost">
              <div class="modal-content">
                <div class="modal-header headerCreatePost">
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Fechar"
                  ></button>
                </div>
                <div class="modal-body">
                  <label class="postTitle"
                    >Insira o título da sua postagem:</label
                  >
                  <input
                    class="form-control"
                    type="text"
                    placeholder="Título"
                    aria-label="título da postagem"
                    value=titulo
                    
            
                  />
                  <label class="createPostContent mt-4"
                    >Insira o conteúdo da sua postagem:</label
                  >
            
                  <textarea
                    class="form-control"
                    id="createPostContent"
                    rows="5"
                  ></textarea>
                  <label class="tags mt-4">Tags:</label>
                  <input class="form-control" type="text" placeholder="Tags" />
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckDefault"
                    />
                    <label class="form-check-label" for="flexCheckDefault"
                      >Postagem Anônima
                    </label>
                  </div>
                </div>
                <div class="modal-footer">
                <a href="../posta.php" method="POST" > </a><button type="button" class="btn btn-concluir">
                    Concluir
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
