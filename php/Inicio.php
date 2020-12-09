<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<h1>Markatronix</h1>
		<link rel="stylesheet" href="../css/estilo.css">
		<script type="text/javascript" src="../js/Redireccionar.js"></script>
	</head>
	<body>
		<div id="nombre">
			<form id="formulario" method="post">
				Introduce tu usuario aqui:
				<input type="text" id="nombre" name="nombre"><br><br>
			</form>
		</div>
		<div id="botones">
			<input type="button" class="boton" id="jugar" value="Jugar" onclick="redireccionar('Jugar.php')">
			<input type="button" class="boton" id="pregunta" value="Añadir una pregunta" onclick="redireccionar('../html/AñadirPregunta.html')">
			<br><br>
			<input type="button" class="boton" id="verPreguntas" value="Ver Preguntas" onclick="redirect()">
			<input type="button" class="boton" id="verPuntuaciones" value="Ver Puntuaciones" onclick="redirect()">
		</div>
		<?php
			if(isset($_REQUEST['nombre'])) {
				$_SESSION['Nombre']=$_REQUEST['nombre'];
				//echo "<script> alert(\"¡Preparate para jugar!\"); document.location.href='Jugar.php'; </script>";
			}
		?>
	</body>
</html>
