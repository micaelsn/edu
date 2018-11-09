<?php
	//
	session_start();
	if(isset($_SESSION['username'])){
		header("Location: geren/home.php");
	}
	echo '
	<!DOCTYPE html>
		<html>
			<head>
				<link rel="stylesheet" type="text/css" href="css/styleLogin.css">
				<!-- Bootstrap Core CSS -->
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
				<title>Login</title>
			</head>
			<body>';
			echo '
				<!-- Navigation -->
				<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
					<div class="container">
					<a class="navbar-brand" href="index.php">Education Foundation</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="login.php">Faça seu Login
							<span class="sr-only">(current)</span>
							</a>
						</li>
						</ul>
					</div>
					</div>
				</nav><br>/<br/><br/><br/>';
			//O método GET deixa os dados expostos na url, por isso para se ter mais segura é recomendado usar POST
			if (!isset($_REQUEST['submeter'])) {
				echo '
				<section>
				<div class="container">
					<div class="d-flex justify-content-center h-100">
						<div class="card">
							<div class="card-header">
								<h3>Sign In</h3>
							</div>
							<div class="card-body">
								<form id="meuForm" method="post" action="main.php">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-user"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="username" name="txt_username">
										
									</div>
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-key"></i></span>
										</div>
										<input type="password" class="form-control" placeholder="password" name="txt_password">
									</div>
									<div class="row align-items-center remember">
										<input type="checkbox">Remember Me
									</div>
									<div class="form-group">
										<input type="submit" value="Login" class="btn float-right login_btn" name="btn_submeter">
									</div>
								</form>
							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-center links">
									Don\'t have an account?<a href="cadastro/aluno.html">Sign Up</a>
								</div>
								<div class="d-flex justify-content-center">
									<a href="#">Forgot your password?</a>
								</div>
							</div>
						</div>
					</div>
					</div>
						<!--form id="meuForm" method="post" action="main.php">
							<h2>Login</h2>
							Username: <input type="text" name="txt_username" autofocus="true"><br><br>
							Password: <input type="password" name="txt_password"><br><br>
							<input id="submeter" type="submit" value="Enter" name="btn_submeter"><br><br>
						</form-->
					</section>';
			}
	echo '
			<!-- Bootstrap core JavaScript -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

			</body>
		</html>';
?>
