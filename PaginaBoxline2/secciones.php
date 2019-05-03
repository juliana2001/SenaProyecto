<?php

	require "php/conexion.php";
	$sql = "SELECT * FROM secciones";
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

	<title>Historia</title>
	<link rel="icon" href="img/icono/logo.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<!-- Menu -->
	<header>
		<div class="menuHamburgesa">
			<i class="fas fa-bars"></i>
		</div>
			<nav class="menu justify-content-center">
				<a href="index.php">
					<h2>Inicio</h2>
				</a>
				<a href="login.php">
					<h2>Login</h2>
				</a>
				<a href="registro.php">
					<h2>Registro</h2>
				</a>
				<a href="secciones.php">
					<h2>Historia</h2>
				</a>
				<a href="ra.html">
					<h2>Realidad Aumentada</h2>
				</a>
				<a href="contacto.html">
					<h2>Contacto</h2>
				</a>
			</nav>
 	</header>
 	<!-- Fin Menu -->
	<!-- Afica -->
	<?php $row = mysqli_fetch_array($resultado); ?>
	<section id="africa" class="container-fluid">
		<div class="menuMultimediaA">
			<!--Africa Infografia-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#africaInfografia">
				<i class="fas fa-question-circle"></i>
				<h3>Dambe</h3>
			</button>
			<!--Modal Africa Infografia-->
			<div class="modal fade" id="africaInfografia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Infografia</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="<?php $row["infografia"] ?>">
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Africa Galeria-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#africaGaleria">
				<i class="fas fa-images"></i>
				<h3>Implementos</h3>
			</button>
			<!--Modal Africa Galeria-->
			<div class="modal fade" id="africaGaleria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Implementos</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/casco.png">
							<p><?php echo $row["implementos"] ?></p>
							<img src="img/africa/guante.png">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam maiores saepe dolorum commodi neque expedita error</p>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Africa Video Reglas-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#africaReglas">
				<i class="fas fa-video"></i>
				<h3>Reglas</h3>
			</button>
			<!--Modal Africa Video Reglas -->
			<div class="modal fade" id="africaReglas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Reglas</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="<?php $row["reglas"] ?>">
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Africa Juego-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#africaJuego">
				<i class="fas fa-gamepad"></i>
				<h3>Box Country</h3>
			</button>
			<!--Modal Africa Juego -->
			<div class="modal fade" id="africaJuego" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Juego</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/juego.png">
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="nubesAfrica">
			<img class="animacionNube1A" src="img/africa/nubeAfrica.png">
			<img class="animacionNube2A" src="img/africa/nubeAfrica.png">
			<img class="animacionNube3A" src="img/africa/nubeAfrica.png">
			<img class="animacionNube4A" src="img/africa/nubeAfrica.png">
		</div>
	</section>
	<!--Fin Africa -->
	<!--Grecia -->
	<?php $row = mysqli_fetch_array($resultado); ?>
	<section id="grecia" class="container-fluid">
		<div class="menuMultimediaA">
			<!--Grecia Video-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#greciaVideo">
				<i class="fas fa-video"></i>
				<h3>Historia</h3>
			</button>
			<!--Modal Grecia Video-->
			<div class="modal fade" id="greciaVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Historia</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/videoHistoria.png">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam aut iusto quae error tempore nisi consequuntur natus magni fugiat illum, repellat minima quibusdam aliquam dolor deserunt repudiandae quas, laboriosam.</p>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Grecia Galeria-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#greciaGaleria">
				<i class="fas fa-images"></i>
				<h3>Implementos</h3>
			</button>
			<!--Modal Grecia Galeria-->
			<div class="modal fade" id="greciaGaleria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Implementos</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/casco.png">
							<p><?php $row["implementos"] ?></p>
							<img src="img/africa/guante.png">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam maiores saepe dolorum commodi neque expedita error</p>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Grecia Video Reglas-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#greciaVideoReglas">
				<i class="fas fa-video"></i>
				<h3>Reglas</h3>
			</button>
			<!--Modal Grecia Video Reglas-->
			<div class="modal fade" id="greciaVideoReglas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Reglas</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="<?php $row["reglas"] ?>">
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Grecia Juego-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#greciaJuego">
				<i class="fas fa-gamepad"></i>
				<h3>Box Country</h3>
			</button>
			<!--Modal Grecia Juego -->
			<div class="modal fade" id="greciaJuego" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Juego</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/juego.png">
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="nubesGrecia">
			<img class="animacionNube1G" src="img/grecia/nubeGrecia.png">
			<img class="animacionNube2G" src="img/grecia/nubeGrecia.png">
			<img class="animacionNube3G" src="img/grecia/nubeGrecia.png">
			<img class="animacionNube4G" src="img/grecia/nubeGrecia.png">
		</div>
	</section>
	<!--Fin Grecia -->
	<!--Inglaterra -->
	<?php $row = mysqli_fetch_array($resultado); ?>
	<section id="inglaterra" class="container-fluid">
		<div class="menuMultimediaA">
			<!--Inglaterra Video Historia-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inglaterraVideo">
				<i class="fas fa-video"></i>
				<h3>Historia</h3>
			</button>
			<!--Modal Inglaterra Video Historia-->
			<div class="modal fade" id="inglaterraVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Historia</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/videoHistoria.png">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam aut iusto quae error tempore nisi consequuntur natus magni fugiat illum, repellat minima quibusdam aliquam dolor deserunt repudiandae quas, laboriosam.</p>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Inglaterra Animacion Personajes-->
			<button type="inglaterraAnimacion" class="btn btn-primary" data-toggle="modal" data-target="#prueba2">
				<i class="fas fa-file-video"></i>
				<h3>Personajes</h3>
			</button>
			<!--Modal Inglaterra Animacion Personajes-->
			<div class="modal fade" id="inglaterraAnimacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Personajes</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block" src="img/africa/personaje3.jpeg">
									</div>
									<div class="carousel-item">
										<img class="d-block" src="img/africa/personaje2.jpeg">
									</div>
									<div class="carousel-item">
										<img class="d-block" src="img/africa/personaje1.jpeg">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Inglaterra Galeria Implementos-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inglaterraGaleria">
				<i class="fas fa-images"></i>
				<h3>Implementos</h3>
			</button>
			<!--Modal Inglaterra Galeria Implementos -->
			<div class="modal fade" id="inglaterraGaleria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Implementos</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/casco.png">
							<p><?php $row["implementos"] ?></p>
							<img src="img/africa/guante.png">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam maiores saepe dolorum commodi neque expedita error</p>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Inglaterra Video Reglas-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inglaterraVideoReglas">
				<i class="fas fa-video"></i>
				<h3>Reglas</h3>
			</button>
			<!--Modal Inglaterra Video Reglas-->
			<div class="modal fade" id="inglaterraVideoReglas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Reglas</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="<?php $row["reglas"] ?>">
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Inglaterra Juego-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inglaterraJuego">
				<i class="fas fa-gamepad"></i>
				<h3>Box Country</h3>
			</button>
			<!--Modal Inglaterra Juego-->
			<div class="modal fade" id="inglaterraJuego" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Juego</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/juego.png">
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="nubesInglaterra">
			<img class="animacionNube1I" src="img/inglaterra/nubeInglaterra.png">
			<img class="animacionNube2I" src="img/inglaterra/nubeInglaterra.png">
			<img class="animacionNube3I" src="img/inglaterra/nubeInglaterra.png">
		</div>
	</section>
	<!--Fin Inglaterra -->
	<!--Estados Unidos -->
	<?php $row = mysqli_fetch_array($resultado); ?>
	<section id="estadosUnidos" class="container-fluid">
		<div class="menuMultimediaA">
			<!--Estados Unidos Video Historia-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#estadosUnidosVideo">
				<i class="fas fa-video"></i>
				<h3>Historia</h3>
			</button>
			<!--Modal Estados Unidos Video Historia-->
			<div class="modal fade" id="estadosUnidosVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Historia</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/videoHistoria.png">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam aut iusto quae error tempore nisi consequuntur natus magni fugiat illum, repellat minima quibusdam aliquam dolor deserunt repudiandae quas, laboriosam.</p>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Estados Unidos Personajes-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#estadosUnidosPersonaje">
				<i class="fas fa-file-video"></i>
				<h3>Personajes</h3>
			</button>
			<!--Modal Estados Unidos Personajes-->
			<div class="modal fade" id="estadosUnidosPersonaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Personajes</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block" src="img/africa/personaje3.jpeg">
									</div>
									<div class="carousel-item">
										<img class="d-block" src="img/africa/personaje2.jpeg">
									</div>
									<div class="carousel-item">
										<img class="d-block" src="img/africa/personaje1.jpeg">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Estados Unidos Infografia-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#estadosUnidosInfografia">
				<i class="fas fa-question-circle"></i>
				<h3>Tecnicas</h3>
			</button>
			<!--Modal Estados Unidos Infografia-->
			<div class="modal fade" id="estadosUnidosInfografia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Infografia</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="<?php $row["infografia"] ?>">
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Estados Unidos Implementos-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#estadosUnidosImplementos">
				<i class="fas fa-images"></i>
				<h3>Implementos</h3>
			</button>
			<!--Modal Estados Unidos Implementos-->
			<div class="modal fade" id="estadosUnidosImplementos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Implementos</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/casco.png">
							<p><?php $row["implementos"] ?></p>
							<img src="img/africa/guante.png">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam maiores saepe dolorum commodi neque expedita error</p>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Video Reglas-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#estadosUnidosVideoReglas">
				<i class="fas fa-video"></i>
				<h3>Reglas</h3>
			</button>
			<!-- Modal -->
			<div class="modal fade" id="estadosUnidosVideoReglas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Reglas</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="<?php $row["reglas"] ?>">
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Estados Unidos Juego-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#estadosUnidosJuego">
				<i class="fas fa-gamepad"></i>
				<h3>Box Country</h3>
			</button>
			<!--Modal Estados Unidos Juego-->
			<div class="modal fade" id="estadosUnidosJuego" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Juego</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/juego.png">
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="nubesEstadosUnidos">
			<img class="animacionNube1E" src="img/estadosUnidos/nubeEstadosUnidos.png">
			<img class="animacionNube2E" src="img/estadosUnidos/nubeEstadosUnidos.png">
			<img class="animacionNube3E" src="img/estadosUnidos/nubeEstadosUnidos.png">
			<img class="animacionNube4E" src="img/estadosUnidos/nubeEstadosUnidos.png">
		</div>
	</section>
	<!--Fin Estados Unidos -->
	<!--Colombia -->
	<?php $row = mysqli_fetch_array($resultado); ?>
	<section id="colombia" class="container-fluid">
		<div class="menuMultimediaA">
			<!--Video Historia-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#colombiaVideo">
				<i class="fas fa-video"></i>
				<h3>Historia</h3>
			</button>
			<!-- Modal -->
			<div class="modal fade" id="colombiaVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Historia</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/videoHistoria.png">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam aut iusto quae error tempore nisi consequuntur natus magni fugiat illum, repellat minima quibusdam aliquam dolor deserunt repudiandae quas, laboriosam.</p>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Animacion Personajes-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#colombiaAnimacion">
				<i class="fas fa-file-video"></i>
				<h3>Personajes</h3>
			</button>
			<!-- Modal -->
			<div class="modal fade" id="colombiaAnimacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Personajes</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block" src="img/africa/personaje3.jpeg">
									</div>
									<div class="carousel-item">
										<img class="d-block" src="img/africa/personaje2.jpeg">
									</div>
									<div class="carousel-item">
										<img class="d-block" src="img/africa/personaje1.jpeg">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Infografia-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#colombiaInfografia">
				<i class="fas fa-question-circle"></i>
				<h3>Categorias</h3>
			</button>
			<!-- Modal -->
			<div class="modal fade" id="colombiaInfografia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Infografia</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/dambeInfo1.jpg">
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Galeria Implementos-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#colombiaGaleria">
				<i class="fas fa-images"></i>
				<h3>Implementos</h3>
			</button>
			<!-- Modal -->
			<div class="modal fade" id="colombiaGaleria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Implementos</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/casco.png">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam maiores saepe dolorum commodi neque expedita error</p>
							<img src="img/africa/guante.png">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam maiores saepe dolorum commodi neque expedita error</p>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Video Reglas-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#colombiaVideoReglas">
				<i class="fas fa-video"></i>
				<h3>Reglas</h3>
			</button>
			<!-- Modal -->
			<div class="modal fade" id="colombiaVideoReglas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Reglas</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/videoHistoria.png">
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
			<!--Juego Box Country-->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#colombiaJuego">
				<i class="fas fa-gamepad"></i>
				<h3>Box Country</h3>
			</button>
			<!-- Modal -->
			<div class="modal fade" id="colombiaJuego" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Juego</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/africa/juego.png">
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="extrellasColombia">
			<img class="animacionExtrella1C" src="img/colombia/extrellaColombia.png">
			<img class="animacionExtrella2C" src="img/colombia/extrellaColombia.png">
			<img class="animacionExtrella3C" src="img/colombia/extrellaColombia.png">
			<img class="animacionExtrella4C" src="img/colombia/extrellaColombia.png">
			<img class="animacionExtrella5C" src="img/colombia/extrellaColombia.png">
			<img class="animacionExtrella6C" src="img/colombia/extrellaColombia.png">
			<img class="animacionExtrella7C" src="img/colombia/extrellaColombia.png">
			<img class="animacionExtrella8C" src="img/colombia/extrellaColombia.png">
		</div>
	</section>
	<!--Fin Colombia -->

</body>
</html>
