<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<h1>Markatronix</h1>
	</head>
	<body>
		<div id="juego">
			<form id="pregunta" method="post" action="inicioPregunta.php" enctype="multipart/form-data">
				Introduce tu usuario aqui*:
				<input type="text" id="nombre" name="nombre" required="true"><br>
				<input type="submit" id="jugar">
			</form>
		</div>
		<div id="pregunta">
			<form id="pregunta" method="post" action="anadirPregunta.html" enctype="multipart/form-data">
				<input type="submit" id="añadir una pregunta personalizada">
			</form>
		</div>
		<?php
			if(isset($_REQUEST['nombre'])) {
				$nombre=$_REQUEST['nombre'];
				echo "<script> alert(\"¡Preparate para jugar!\"); document.location.href='Juego.php?usuario=$nombre'; </script>";
		?>
	</body>
</html>
