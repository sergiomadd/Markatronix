<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
  <section class="main" id="s1">
    <input type="button" id="inicio" name="inicio" value="Ir a Inicio" onclick="window.location='Inicio.php'"><br>
    <div>
      <?php
      include '../php/DbConfig.php';
      $link = mysqli_connect($servername, $username, $password, $database);
      $preguntasPartida = simplexml_load_file("../xml/Preguntas.xml");
      echo '<table>';
      echo "<tr><th> Marca </th><th> Respuesta Correcta </th><th> Pista </th><th> Autor </th></tr>";
      foreach($preguntasPartida->pregunta as $pregunta)
      {
          echo"<tr>";
               $idImagen = $pregunta['id'];
               $imagen = mysqli_query($link, "SELECT * from imagenes where id=".$idImagen);
               $row = mysqli_fetch_array($imagen);
               echo"<td>".'<img src="data:image/jpg;base64,'.base64_encode( $row['imagen'] ).'" height="50" width="50"/>'."</td>";
               echo"<td>".$pregunta->marca."</td>";
               echo"<td>".$pregunta->pista."</td>";
							 echo"<td>".$pregunta['autor']."</td>";
          echo"</tr>";
      }
      echo "</table>";
      echo"<br>";
      ?>
    </div>
  </section>
</body>
</html>
