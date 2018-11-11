<?php
	session_start();

	$user = $_POST['txt_username'];
	$password = $_POST['txt_password'];

	if(pesquisarBD($user, $password)){
		$_SESSION['username'] = $user;
		$_SESSION['password'] = $password;	
		header("Location: geren/home.php");
	}
	else {
		header("Location: error_login.php?user=$user");
	}

	function pesquisarBD($login, $senha){
		ini_set('default_charset', 'utf-8');
		require_once('dbconnection/dbconfig.php');

		$sql = "SELECT * FROM `usuarios` WHERE login = ? AND senha = ?";
		$resultado = $connection->prepare($sql);
		$resultado->execute(array($login,$senha));

		if ($resultado->rowCount()) {
			return true;
		} else {
			return false;
		}
	}
?>
