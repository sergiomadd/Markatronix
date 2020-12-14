<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container" style="width:800px; margin:0 auto;">
    <div class="jumbotron" >
  <h1>Preguntas almacenadas</h1>
</div>
  <section class="main" id="s1">
    <input type="button" id="inicio" class="btn btn-primary" name="inicio" value="Ir a Inicio" onclick="window.location='Inicio.php'"><br>
      <?php
      include '../php/DBConfig.php';
      $link = mysqli_connect($servername, $username, $password, $database);
      $preguntasPartida = simplexml_load_file("../xml/Preguntas.xml");
      echo '<table class="table table-hover">';
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
