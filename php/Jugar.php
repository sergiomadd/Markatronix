<!DOCTYPE html>
<?php session_start();
	echo'<script>alert("'.$_SESSION['nombre'].'");</script>';
?>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/estilo.css">
	</head>
	<body>
		<div id="creacion_sesion">
		</div>
		<div>
			<h1>Markatronix</h1>
			<img src="" id="imagen" width="400" height="400"> <br>
			Nombre de la marca:
			<input type="text" id="respuesta" name="respuesta"><br><br>

			<input type="button" id="pista" name="pista" value="Pista">
			<input type="button" id="submit" name="submit" value="Responder"><br><br>
	</div>
	</body>
</html>
