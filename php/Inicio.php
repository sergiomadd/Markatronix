<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<h1>Markatronix</h1>
		<link rel="stylesheet" href="../css/estilo.css">
		<script type="text/javascript" src="../js/Gestion-sesion.js"></script>
		<script type="text/javascript" src="../js/CrearSesion.js"></script>
		<script type="text/javascript" src="../js/Redireccionar.js"></script>
	</head>
	<body>
		<div id="gestion-nombre">
				<label for="label_user">Introduce tu usuario aqui:</label>
				<input type="text" id="nombre" name="nombre"><br><br>
		</div>
		<div id="botones">
			<input type="button" class="boton" id="jugar" value="Jugar" onclick="redireccionar('Jugar.php')">
			<input type="button" class="boton" id="pregunta" value="Añadir una pregunta" onclick="redireccionar('../html/AñadirPregunta.html')">
			<br><br>
			<input type="button" class="boton" id="verPreguntas" value="Ver Preguntas" onclick="redirect()">
			<input type="button" class="boton" id="verPuntuaciones" value="Ver Puntuaciones" onclick="redirect()">
		</div>
		<div id="cerrar_sesion">
			<input type="button" class="boton" id="cerrar" value="Cerrar sesion" onclick="cerrar_sesion()">
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
	</body>
</html>
