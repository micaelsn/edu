<?php
	session_start();
	if (isset($_SESSION['username'])) {
	echo '
	<!DOCTYPE html>
	<html>
	<head>
		<title>Gerenciar Emails</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body>
		<form method="post" action="">
		<h3>Enviar email para todos os cadastrados</h3>
		Digite titulo: <input type="text" name="titulo" autofocus="true"><br><br>
		Digite a mensagem: <input type="text" name="mensagem"><br><br>
		<input type="submit" name="submeter">
	</form>
	</body>
	</html>';
	}
	else {
		echo '<p>Faça Seu Login para entrar no sistema</p>';
		echo '<p><a href="login.php">Tela de Login</a></p><br>
		<p>todos os direitos reservados</p>';
	}
	
?>