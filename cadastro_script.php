<!DOCTYPE html>
<html>
<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ACAU - Cadastro</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Estilo customizado -->
	<link rel="stylesheet" type="text/css" href="../css/cadastro.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<!--Font Awesome Icons-->
  <script src="https://kit.fontawesome.com/c38b27744a.js" crossorigin="anonymous"></script>

</head>
<body>
	<div id="container" class="container1">

		<img src="../imagens/logo.png">

		<h1>Cadastre-se</h1>

    <?php
//      include_once("conexao.php");
			
			function alert($msg) {
				echo "
				<script type='text/javascript'>
				alert('$msg');
				//window.location = 'index.php';
				</script>
				";
				
			}

      $nome = $_POST['nome'];
      $rg = $_POST['rg'];
      $senha = $_POST['senha'];
      $id = substr($rg,0,5)."unaba";

      include_once ("Models/AlunoModel.php");

      $alunoModel = new AlunoModel();
      //$alunoModel = $alunoModel->getByRg($rg);
     // if($alunoModel->rg == $rg){
          //header('index.php');
//          alert("Aluno já possui cadastro");
          //exit();
      //}else{
          $alunoModel->idaluno = $id;
          $alunoModel->rg = $rg;
          $alunoModel->nome = $nome;

          $criptografada = base64_encode($senha);
          $alunoModel->senha = $criptografada;

          $alunoModel->save($alunoModel);
//          header("Location: https://acau.online/pages/cadastro.html");
//          die();
     // }




//			$options    = array("cost"=>4);
//			$hashPassword = password_hash($senha,PASSWORD_BCRYPT,$options);
//      $result_q = "INSERT INTO aluno(idaluno, nome, rg, senha) VALUES ('$id','$nome','$rg','$hashPassword')";
//      alert(var_dump($conn));
//			resultId($rg, $conn);
      // $resultado_usuario = mysqli_query($conn, $result_q);
			// $resultRg = $mysqli->query("SELECT COUNT(*) FROM aluno WHERE idaluno = $id");
			// $row = $resultRg->fetch_row();
			// if ($row[0] > 0) {
    	// 	echo "Aluno já cadastrado";
			// }
//			function resultId($rg, $conn){
//				$query = ("SELECT idaluno FROM aluno WHERE $rg = rg");
//				$data = mysqli_query($conn, $query);
//				var_dump($data);
//				return $data;
//			}
//
//      if(mysqli_affected_rows($conn) != 0){
//
//				alert("Seu id é:  .$id \n Anote!");
//			}


  ?>


</div>

	<div id="container" class="container2">
		<h4>Nome social</h4>
		<p>É o nome pelo qual você gostaria de ser chamado(a).</p>
		<h4>RG</h4>
		<p>É o seu número de identificação civil. Você deve digitar apenas números.</p>
		<h4>Senha</h4>
		<div id="message">
		  <p id="length" class="invalid">Mínimo de <b>8</b> caracteres</p>
		  <p id="number" class="invalid">Mínimo de <b> 1 </b> número</p>
		  <p id="capital" class="invalid">Mínimo de <b> 1</b> letra maiúscula</p>
		  <p id="symbol" class="invalid">Mínimo de <b>1</b> símbolo especial (@, #, $...)</p>
		</div>

		<h4>Instituição de ensino</h4>
		<p>É a instituição em que você estuda.</p>


	</div>

<!-- Javascript -->
<script type="text/javascript" src="../js/cadastro.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
