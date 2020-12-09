<!DOCTYPE html>
<?php session_start();
	echo'<script>alert("'.$_SESSION['nombre'].'");</script>';
?>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/estilo.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/GenerarPartida.js"></script>
		<script type="text/javascript" src="../js/CargarImagen.js"></script>
	</head>
	<body>
		<div id="creacion_sesion">
		</div>
		<div>
			<h1>Markatronix</h1>
			<div id="imagenDiv">

			</div>
			Nombre de la marca:
			<input type="text" id="respuesta" name="respuesta"><br><br>
			<input type="button" id="pista" name="pista" value="Pista">
			<input type="button" id="submit" name="submit" value="Responder" onclick="a"><br><br>
	</div>
	</body>
</html>
