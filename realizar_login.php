<?php 
	
	session_start();

	//Incluíndo a conexão ao BD
	require('conexao.php');

	//variável que verifica se a autenticação foi realizada
	$usuario_autenticado = false;

	//Pegando as informções preenchidas no form do login
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	//Consultando no BD
	$query = sprintf("SELECT u.email_log, u.senha FROM usuario u WHERE u.email_log = '$email' AND u.senha = '$senha'");
	$resultado = mysqli_query($conexao,$query) or die(mysqli_error($conexao));

	//Verificando se foi encontrado alguma credencial correspondente
	if (mysqli_num_rows($resultado) != 0) {
		echo 'Usuário autenticado';
		$_SESSION['autenticado'] = 'SIM';
		header('Location: home.php');
	}
	else{
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro'); //Caso não, redireciona para a página de login
	}

	mysqli_close($conexao); //Fecha conexão com banco de dados

?>
