<?php 
	session_start();

	if (isset($_SESSION['username'])) {
		$user = $_SESSION['username'];

		echo '<p>Bem vindo, '.$user.'</p>';
		echo ' 
			<ul>
			 	<li><a href="gerenciar.php">Enviar e-mails</a></li>
			</ul>';
	}
	else {
		echo '<p>Faça Seu Login para entrar no sistema</p>';
		echo '
			<p><a href="login.php">Tela de Login</a></p><br>
			<p>todos os direitos reservados</p>';
	}
	
 ?>
