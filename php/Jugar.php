<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<style>
			div
			{
				margin: auto;
				width: 30%;
				border: 10px solid black;
				padding: 1px;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div>
			<h1>Markatronix</h1>
			<img src="" width="400" height="400"> <br>
			Nombre de la marca:
			<input type="text" id="respuesta" name="respuesta"><br><br>

			<input type="button" id="pista" name="pista" value="Pista">
			<input type="button" id="submit" name="submit" value="Responder"><br><br>
			<input type="button" id="next" name="next" value="Siguiente pregunta ->" style="display: none;"><br>
	</div>
	<?php
		function actualizar()
		{
			$id = rand(0, $preguntas['ultimo']);
			$lista = array();
		}

		include 'DBConfig.php';
		$mysql = mysqli_connect($servername, $username, $password, $database);
		if(!$mysql)
		{
			echo "Error link mysql";
			die ("Fallo al conectar a la BD" . mysqli_connect_error());
		}
		echo "Conectado correctamente";
		$sql = "SELECT * from imagenes where id=".$randID;
		$pregunta = mysqli_query($mysql, $sql);
		$imagen = mysqli_fetch_array($pregunta)['imagen'];
		$id = mysqli_fetch_array($pregunta)['id'];

		cargarImagen($imagen); //Hacer en js

		$preguntas = simplexml_load_file( "../xml/Preguntas.xml" );
		





	?>
	</body>
</html>
