<?php
session_start();
?>
<html>
	<head>
		<title>LogIn MacksJacga</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
	<div class="py-5">
			<div class="container">
				<div class="row">
					<div class="text-center mx-auto col-lg-8 col-10">
						<h1 class="mb-3">Carousel</h1>
						<div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
							<div class="carousel-inner">
								<div class="carousel-item"> <img class="d-block w-100" src="https://static.pingendo.com/cover-moon.svg"> </div>
								<div class="carousel-item"> <img class="d-block w-100" src="https://static.pingendo.com/cover-bubble-light.svg"> </div>
								<div class="carousel-item active"> <img class="d-block w-100" src="https://static.pingendo.com/cover-bubble-dark.svg"> </div>
							</div>
							<ol class="carousel-indicators">
								<li data-target="#carousel1" data-slide-to="0" class=""> </li>
								<li data-target="#carousel1" data-slide-to="1" class=""> </li>
								<li data-target="#carousel1" data-slide-to="2" class="active"> </li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="py-5" >
			<div class="container">
				<div class="row">
					<div class="col-lg-8 p-md-5 p-3 d-flex flex-column justify-content-center">
						<h1>A thousand sliders</h1>
						<p class="mb-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
					</div>
					<div class="col-lg-4 p-3">
						<div id="carousel2" class="carousel slide" data-ride="carousel" data-interval="5000">
							<div class="carousel-inner">
								<div class="carousel-item active"> <img class="d-block w-100" src="https://static.pingendo.com/img-placeholder-1.svg"> </div>
								<div class="carousel-item"> <img class="d-block w-100" src="https://static.pingendo.com/img-placeholder-2.svg"> </div>
								<div class="carousel-item"> <img class="d-block w-100" src="https://static.pingendo.com/img-placeholder-3.svg"> </div>
								<div class="carousel-item"> <img class="d-block w-100" src="https://static.pingendo.com/img-placeholder-4.svg"> </div>
							</div>
							<a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
							<a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<p class="lead">Suscribete a nuestro boletín de noticias</p>
						<form class="form-inline">
							<div class="form-group"> <input type="email" class="form-control" placeholder="Your e-mail here"> </div> <button type="submit" class="btn btn-primary ml-3">Subscribe</button>
						</form>
					</div>
					<div class="col-4 col-md-1 align-self-center"> <a href="#">
							<i class="fa fa-fw fa-facebook text-muted fa-2x"></i>
						</a> </div>
					<div class="col-4 col-md-1 align-self-center"> <a href="#">
							<i class="fa fa-fw fa-twitter text-muted fa-2x"></i>
						</a> </div>
					<div class="col-4 col-md-1 align-self-center"> <a href="#">
							<i class="fa fa-fw fa-instagram text-muted fa-2x"></i>
						</a> </div>
				</div>
				<div class="row">
					<div class="col-md-12 mt-3 text-center">
						<p>© Copyright 2018 MacksJacga - All rights reserved.</p>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>
