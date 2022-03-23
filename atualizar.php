<?php 

  	require_once("validador_acesso.php");

  	//Incluíndo a conexão ao BD
  	require('conexao.php');

  	$emailAtual = $_SESSION['email'];
  	$emailNovo = $_POST['email'];
  	$senhaNova = $_POST['senhaNova'];
  	$senhaVelha = $_POST['senhaVelha'];

	if($senhaNova != '') {
		try{
			$query = sprintf("SELECT u.senha FROM usuario u WHERE email_log = '$emailAtual'");
			$resultado = mysqli_query($conexao,$query) or die(mysqli_error($conexao));
			$resultado = mysqli_fetch_array($resultado); //Transformando o resultado em array

			//Verificando se as senhas são diferentes para então mudar
			if ($resultado['senha'] != $senhaNova && $resultado['senha'] == $senhaVelha) {
				$query = sprintf("UPDATE usuario SET senha = '$senhaNova' WHERE email_log = '$emailAtual'");
				$resultado = mysqli_query($conexao,$query) or die(mysqli_error($conexao));
				header('Location: home.php?att=sucesso');
			}
			else{
				header('Location: home.php?att=erroSenhas'); //Erro nas senhas fornecidas
			}
			
		} catch (Exception $e) {
			throw new Exception("Erro na atualização da senha", 1);
			header('Location: home.php?att=erro'); //Caso não atualizou, redireciona para a página de home	
		}
	}

	if ($emailNovo != $emailAtual) {
		try{
			$query = sprintf("UPDATE usuario SET email_log = '$emailNovo' WHERE email_log = '$emailAtual'");
			$resultado = mysqli_query($conexao,$query) or die(mysqli_error($conexao));
			$_SESSION['email'] = $emailNovo;
			header('Location: home.php?att=sucesso'); //Nada a mudar
		
		} catch (Exception $e) {
			throw new Exception("Erro na atualização do e-mail", 1);
			header('Location: home.php?att=erro'); //Caso não atualizou, redireciona para a página de home	
		}
	}

	if ($senhaNova == '' && $emailNovo == $emailAtual) {
	  	header('Location: home.php?att=iguais'); //Nada a mudar	
	}
	mysqli_close($conexao); //Fecha conexão com banco de dados

?>
