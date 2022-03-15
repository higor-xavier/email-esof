<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Estilizando formulários</title>

		<!-- Estilo customizado -->
		<link rel="stylesheet" type="text/css" href="CSS/estilo-login.css">
	</head>
	<body>
		<!-- Incluindo o fundo da página de login -->
		<img id="fundo" src="imagens/fundo.jpg">

		<!-- Início do espaço de logar -->
		<div id="container">
			<img src="imagens/perfil.png">
			<!-- Início do form para fazer login -->
			<form action="realizar_login.php" method="POST">
				<div>
					<input class="email" type="text" name="email" id="email" placeholder="Digite seu e-mail">
				</div>

				<div>
					<input class="senha" type="password" name="senha" id="senha" placeholder="Digite sua senha">
				</div>

				<div>
					<input class="submit" type="submit" value="Logar">
				</div>
			</form><!-- Fim do form para fazer login -->
		</div><!-- Fim do espaço de logar -->

	</body>
</html>