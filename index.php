<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E-mail ESOF</title>
    	<link rel="icon" href="imagens/mail.png">

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
					<input class="email" type="email" name="email" id="email" placeholder="Digite seu e-mail">
				</div>

				<div>
					<input class="senha" type="password" name="senha" id="senha" placeholder="Digite sua senha">
				</div>

				<?php 
                  if (isset($_GET['login']) && $_GET['login'] == 'erro') {
                ?>
                    <div>
                        Usuário ou senha inválido(s)
                    </div>
                <?php 
                  }
                ?>

                <?php 
                  if (isset($_GET['login']) && $_GET['login'] == 'erro2') {
                ?>
                    <div>
                        Faça login antes de acessar as páginas protegidas!
                    </div>
                    
                <?php 
                  }
                ?>

				<div>
					<input class="submit" type="submit" value="Logar">
				</div>
			</form><!-- Fim do form para fazer login -->
		</div><!-- Fim do espaço de logar -->

	</body>
</html>