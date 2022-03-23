<?php 

  	require_once("validador_acesso.php");

  	//Incluíndo a conexão ao BD
  	require('conexao.php');

  	$emailAtual = $_SESSION['email'];

  	try {
  		$query = sprintf("DELETE FROM usuario WHERE email_log = '$emailAtual'");
		$resultado = mysqli_query($conexao,$query) or die(mysqli_error($conexao));
		header('Location: logoff.php'); //redireciona para a destruição da sessão e depois index.php
  	} catch (Exception $e) {
  		throw new Exception("Erro na deleção", 1);
		header('Location: home.php?att=erroDelecao'); //Caso não apagou, redireciona para a página de home
  	}

	mysqli_close($conexao); //Fecha conexão com banco de dados

?>
