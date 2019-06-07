<?php

	require "php/conexion.php";
	$sql = "SELECT * FROM boxline";
	$resultado = mysqli_query($conexion, $sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/codigo.min.js"></script>

	<title>Box Line</title>
	<link rel="icon" href="img/icono/logo.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<!-- Menu -->
	<header>
		<div class="menuHamburgesa">
			<i class="menuH fas fa-bars"></i>
		</div>
			<nav class="menu justify-content-center">
				<a href="index.php">
					<img src="img/icono/btnInicioMenu.png" width="50px">
					<h2>Inicio</h2>
				</a>
				<a href="registro.php">
					<img src="img/icono/btnRegistroMenu.png" width="50px">
					<h2>Registro</h2>
				</a>
				<a href="secciones.php">
					<img src="img/icono/btnHistoriaMenu.png" width="50px">
					<h2>Historia</h2>
				</a>
				<a href="#">
					<img src="img/icono/btnJuegoMenu.png" width="50px">
					<h2>Juego</h2>
				</a>
				<a href="contacto.html">
					<img src="img/icono/btnContactoMenu.png" width="50px">
					<h2>Contacto</h2>
				</a>	
			</nav>
	</header>
 	<!-- Fin Menu -->
	<!-- Inicio -->
	<section id="inicio" class="container-fluid">
		<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active" data-interval="10000">
					<img src="img/inicio.jpg" class="d-block w-100" alt="fondoInicio">
				</div>
				<div class="carousel-item" data-interval="2000">
					<img src="img/realidadAumentada.png" class="d-block w-100" alt="realidadAumentada">
				</div>
				<div class="carousel-item">
					<video class="d-block w-100" controls autoplay="false">
						<source src="img/BoxLine.mp4" type="video/mp4">
					</video>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only"></span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only"></span>
			</a>
		</div>
	</section>
	<!-- Fin Inicio -->
</body>
</html>
