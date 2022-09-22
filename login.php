<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" type="text/css" href="imagens/logo.png">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>		
	<section class="area-login">
		<div class="login">
			<div>
				<img src="imagens/logo.png">
			</div>	
		<form action="login.php" method="POST">
			<input type="email" name="email" placeholder="Informe seu email" autofocus required>
			<input type="password" name="senha" placeholder="Informe sua senha" autofocus required>
			<input type="submit" value="entrar">
		</form>
			<p>Ainda não é um bruxo?<a href="reserva.php" target="_blank">Torne-se um</a></p>
		</div>
	</section>

</body>

</html>