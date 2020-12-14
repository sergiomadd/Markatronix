<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<div class="container" style="width:800px; margin:0 auto;">
		<div class="jumbotron" >
		<h1>Markatronix</h1>
	</div>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/Gestion-sesion.js"></script>
		<script type="text/javascript" src="../js/CrearSesion.js"></script>
		<script type="text/javascript" src="../js/Redireccionar.js"></script>
		<script type="text/javascript" src="../js/EliminarPartida.js"></script>
	</head>
	<body>
		<div id="gestion-nombre">
				<label for="label_user">Introduce tu usuario aqui:</label>
				<input type="text" id="nombre" class="form-control" name="nombre"><br><br>
		</div>
		<div class="btn-group">
			<input type="button" class="btn btn-success"  id="jugar" value="Jugar" onclick="redireccionar('Jugar.php')">
			<input type="button" class="btn btn-success"  id="pregunta" value="Añadir una pregunta" onclick="redireccionar('../html/AnadirPregunta.html')">
			

		</div>
		<br><br>
		<div class="btn-group">
			<input type="button" class="btn btn-danger"  id="verPreguntas" value="Ver Preguntas" onclick="redireccionar('VerPreguntas.php')">
			<input type="button" class="btn btn-danger"  id="verPuntuaciones" value="Ver Puntuaciones" onclick="redireccionar('VerPuntuaciones.php')">
		</div>
		<br><br>
		<div id="cerrar_sesion">
			<input type="button" class="btn btn-danger"  id="cerrar" value="Cerrar sesion" onclick="cerrar_sesion()">
		</div>
		<div id="gestion_sesion">
			<?php
			if(isset($_SESSION['nombre'])){
				echo"<script>sesion_iniciada();</script>";
				echo"tu usuario es: ".$_SESSION['nombre'];
			}
			else{
				echo"<script>sesion_cerrada();</script>";
			}
			?>
		</div>
	</div>
	</body>
</html>
