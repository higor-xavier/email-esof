<?php 
	
	session_start();

	//variável que verifica se a autenticação foi realizada
	$usuario_autenticado = false;
		
	$usuarios_app = [
		['id'=> 1,'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1],
		['id'=> 2, 'email' => 'user@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 1],
		['id'=> 3, 'email' => 'jose@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 2],
		['id'=> 4, 'email' => 'maria@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 2]
	];

	foreach ($usuarios_app as $user) {

		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}
		
	}

	if ($usuario_autenticado) {
		echo 'Usuário autenticado';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php');
	}
	else{
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	}

?>
