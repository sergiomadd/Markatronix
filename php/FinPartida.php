<!DOCTYPE html>
<?php session_start();
?>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/estilo.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/Redireccionar.js"></script>
	</head>
	<body>
		<div>
			<h1>Markatronix</h1>
      <div id="resumen">
        <?php
          include '../php/DbConfig.php';
          $link= mysqli_connect($servername, $username, $password, $database);
          $preguntasPartida = simplexml_load_file("../xml/Partida.xml");
          echo "Has conseguido ".$preguntasPartida['puntos']." puntos en esta partida.<br>";
          echo "Resumen de la partida:";
          echo '<table>';
          echo "<tr><th> Marca </th><th> Respuesta Correcta </th><th> Tu respuesta </th><th> Puntos </th></tr>";
          foreach($preguntasPartida->pregunta as $pregunta)
          {
              echo"<tr>";
                   $idImagen = $pregunta['id'];
                   $imagen = mysqli_query($link, "SELECT * from imagenes where id=".$idImagen);
                   $row = mysqli_fetch_array($imagen);
                   echo"<td>".'<img src="data:image/jpg;base64,'.base64_encode( $row['imagen'] ).'" height="50" width="50"/>'."</td>";
                   echo"<td>".$pregunta->marca."</td>";
                   echo"<td>".$pregunta->respuesta."</td>";
                   echo"<td>".$pregunta['puntos']."</td>";
              echo"</tr>";
         }
         echo "</table>";
         echo"<br>";
				 $puntuaciones = simplexml_load_file("../xml/Puntuaciones.xml");
				 $puntuacion = $puntuaciones->addChild("puntuacion", $preguntasPartida['puntos']);
				 $puntuacion->addAttribute('user', $_SESSION['nombre']);
				 $puntuaciones->asXML('../xml/Puntuaciones.xml');
				?>
      </div>
      <input type="button" id="inicio" name="inicio" value="Ir a Inicio" onclick="window.location='Inicio.php'">
	</div>
	</body>
</html>
