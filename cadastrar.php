<?php 

	//Incluíndo conexão com o banco de dados
	require('conexao.php');

	class Usuario{

		private $nome = null;
		private $email_log = null;
		private $senha = null;
		private $dataNasc = null;
		private $dataCad = null;
		public $status = null;

		public function __set($attr, $value){
			$this->$attr = $value;
		}

		public function __get($attr){
			return $this->$attr;
		}

		public function dadosValidos(){
			if (empty($this->nome) || empty($this->email_log) || empty($this->senha) || empty($this->dataNasc)) {
				return false;
			}

			return true;
		}
	}

	//Instanciando novo usuário
	$usuario = new Usuario();

	//Atribuindo valores vindos da interface
	$usuario->__set('nome', $_POST['nome']);
	$usuario->__set('email_log', $_POST['email']);
	$usuario->__set('senha', $_POST['senha']);
	$usuario->__set('dataCad', date('Y/m/d'));

	//convertendo a data de nascimento vinda da interface
	$data = str_replace("/", "-", $_POST["dataNasc"]);
    $dataNasc = date('Y-m-d', strtotime($data));

	$usuario->__set('dataNasc', $dataNasc);

	//Verificando se os dados vindos da interface são válidos
	if (!$usuario->dadosValidos()) {
		echo 'Dados incorretos';
		header('Location: index.php');
	}

    try {
    	$nome = $usuario->__get('nome');
    	$email_log = $usuario->__get('email_log');
    	$senha = $usuario->__get('senha');
    	$dataNasc = $usuario->__get('dataNasc');
    	$dataCad = $usuario->__get('dataCad');

  		$query = sprintf("INSERT INTO usuario VALUES ('$nome', '$email_log', '$senha', '$dataNasc', '$dataCad')");
		$resultado = mysqli_query($conexao,$query) or die(mysqli_error($conexao));

		$usuario->status = 1;

		mysqli_close($conexao); //Fecha conexão com banco de dados
  	} catch (Exception $e) {
  		throw new Exception("Erro na inserção", 1);
  		$usuario->status = 2;
		header('Location: index.php'); //Caso não inseriu no bando, volta pro index.php
  	}


 ?>

 <!DOCTYPE html>
 <html>
	 <head>
	 	<meta charset="utf-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1">

	 	<title>E-mail ESOF</title>
	 	<link rel="icon" href="imagens/mail.png">

    	<!-- Bootstrap início -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	    <!-- Bootstrap fim -->

	    <!-- Font Awesome -->
	    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	 </head>
	 <body>

	 	<div class="container">
	 		
	 		<div class="py-3 text-center">
				<h2>E-mail ESOF</h2>
				<p class="lead">Seu cadastro foi realizado com sucesso! Clique no botão abaixo para realizar o login.</p>
			</div>

			<div class="row">

				<div class="col-md-12">
					
					<?php 
						if ($usuario->status == 1) {
					?>
						<!-- Mensagem de sucesso -->
						<div class="container">
							<a href="index.php" class="btn btn-secondary mt-5 text-light">Voltar</a>
						</div>
					<?php 
					 	}
					?>

					<?php 
						if ($usuario->status == 2) {
					?>
						<!-- Mensagem de erro -->
						<div class="container">
							<h1 class="display-4 text-danger">Ops!</h1>
							<a href="home.php" class="btn btn-danger mt-5 text-light">Voltar</a>
						</div>
					<?php 
					 	}
					?>

				</div>
				
			</div>

	 	</div>
	 
	 </body>
 </html>