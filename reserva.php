<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro CapivaraNerd</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
	<link rel="shortcut icon" type="text/css" href="imagens/logo.png">
</head>

<body>
	
	<div class="container-cadastro"><!--abertura container-->
		<div class="form-image"><!--abertura form image-->
			<img src="imagens/logo.png" width="350px" alt="Hogwarts">
		</div><!--/fechamento form image-->
		<div class="form"><!--abertura form-->
			<form action="login/cadastrar.php" method="post"><!--abertura form action-->
				<div class="form-header"><!--abertura form header-->
					<div class="title"><!--abertura title-->
						<h1>Torne-se um bruxo</h1>
					</div><!--/fechamento title-->
					<div class="login-button"><!--abertura login-button-->
						<button><a href="login.php" target="_blank">Entrar</a></button>
					</div><!--/fechamento login-button-->
				</div><!--/fechamento form header-->

				<div class="input-group"><!--abertura input-group-->
					<div class="input-box"><!--abertura input-box-->
						<label for="nome">Nome</label>
						<input id="nome" type="text" name="nome" placeholder="Digite o seu Nome" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="sobrenome">Sobrenome</label>
						<input id="sobrenome" type="text" name="sobrenome" placeholder="Digite o seu Sobrenome" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="email">Email</label>
						<input id="email" type="email" name="email" placeholder="Digite o seu Email" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="email">Confirme o seu email</label>
						<input id="confemail" type="email" name="conf" placeholder="Digite o seu email" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="celular">Celular</label>
						<input id="celular" type="tel" name="celular" placeholder="(92) 90000-0000" autofocus required>
					</div><!--/fechamento input-box-->

				</div><!--/fechamento input-group-->				

				<div class="continue-button"><!--abertura continue-submit-->
					<submit><a href="index.php">Reservar</a></submit>
				</div><!--/fechamento continue-submit-->
			</form><!--/fechamento form action-->
		</div><!--/fechamento form-->
	</div><!--/fechamento container-->

</body>

</html>