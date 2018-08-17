<?php
	session_start();
	if(isset($_SESSION['username'])){
		header("Location: home.php");
	}
	echo '
		<!DOCTYPE html>
		<html>
			<head>
				<link rel="stylesheet" type="text/css" href="style.css">
				<title>Login</title>
			</head>
			<body>';
				//O método GET deixa os dados expostos na url, por isso para se ter mais segura é recomendado usar POST
				if (!isset($_REQUEST['submeter'])) {
					echo '
						<section>
							<form id="meuForm" method="post" action="main.php">
								<h2>Login</h2>
								<p id="msgerro">Acesso Inválido</p>
								Username: <input type="text" name="txt_username" value="'.$_REQUEST['user'].'"><br><br>
								Password: <input type="password" name="txt_password" autofocus="true"><br><br>
								<input id="submeter" type="submit" value="Enter" name="btn_submeter"><br><br>
							</form>
						</section>';
				}
	echo '
			</body>
		</html>';
?>
