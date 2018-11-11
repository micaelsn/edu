<?php
	//
	echo '
	<!DOCTYPE html>
		<html>
			<head>
				<link rel="stylesheet" type="text/css" href="css/style.css">
				<link rel="stylesheet" type="text/css" href="css/indexStyle.css">
				<title>Página Inicial</title>
				<!-- Bootstrap Core CSS -->
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
				
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
				<li class="nav-item active">
				  <a class="nav-link" href="#">Home
						<span class="sr-only">(current)</span>
					  </a>
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
				<li class="nav-item">
					<a class="nav-link" href="login.php">Faça seu Login</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
		
		<header>
		  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
			  <!-- Slide One - Set the background image for this slide in the line below -->
			  <div class="carousel-item active" style="background-image: url(\'https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg?cs=srgb&dl=accomplishment-celebrate-ceremony-267885.jpg&fm=jpg\')">
				<div class="carousel-caption d-none d-md-block">
				  <h2 class="display-4">First Slide</h2>
				  <p class="lead">This is a description for the first slide.</p>
				</div>
			  </div>
			  <!-- Slide Two - Set the background image for this slide in the line below -->
			  <div class="carousel-item" style="background-image: url(\'https://images.pexels.com/photos/256541/pexels-photo-256541.jpeg?cs=srgb&dl=bookcase-books-bookshelves-256541.jpg&fm=jpg\')">
				<div class="carousel-caption d-none d-md-block">
				  <h2 class="display-4">Second Slide</h2>
				  <p class="lead">This is a description for the second slide.</p>
				</div>
			  </div>
			  <!-- Slide Three - Set the background image for this slide in the line below -->
			  <div class="carousel-item" style="background-image: url(\'https://images.pexels.com/photos/1181398/pexels-photo-1181398.jpeg?cs=srgb&dl=cabinet-discussing-facial-expression-1181398.jpg&fm=jpg\')">
				<div class="carousel-caption d-none d-md-block">
				  <h2 class="display-4">Third Slide</h2>
				  <p class="lead">This is a description for the third slide.</p>
				</div>
			  </div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
		  </div>
		</header>
		
		<!-- Page Content -->
		<section class="py-5">
		  <div class="container">
			<h1 class="display-4">Full Page Image Slider</h1>
			<p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images in this snippet are from <a href="https://unsplash.com">Unsplash</a>, taken by <a href="https://unsplash.com/@joannakosinska">Joanna Kosinska</a>!</p>
		  </div>
		</section>
';
			
	echo '
			<!-- Bootstrap core JavaScript -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

			</body>

		</html>';
?>