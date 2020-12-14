<?php session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/GenerarPartida.js"></script>
		<script type="text/javascript" src="../js/CargarImagen.js"></script>
		<script type="text/javascript" src="../js/ValidarRespuesta.js"></script>
		<script type="text/javascript" src="../js/VerPista.js"></script>
	</head>
	<body>
		<div class="container" style="width:800px; margin:0 auto;">
		<div class="jumbotron" >
			<h1>Markatronix</h1>
			<div id="imagenDiv"></div>
			Nombre de la marca:
			<input type="text" id="respuesta" name="respuesta"><br><br>
			<input type="button" id="pista" class="btn btn-info" name="pista" value="Pista" onclick="pedirPista()">
			<input type="button" id="responder" class="btn btn-success" name="responder" value="Responder" onclick="validarRespuesta()"><br><br>
			<div id="pistaDiv"></div><br><br>
			<div id="respuestaDiv"></div>
			Cuidado! Puede que la primera imagen no te cargue porque tu internet es rapidisimo! Prueba a pulsar aqui para recargar la imagen.<br><br>
			<input type="button" id="responder" class="btn btn-danger" name="recargar" value="Recargar" onclick="cargarImagen()">
		</div>	
	</div>
	</body>
</html>
