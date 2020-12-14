<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <section class="main" id="s1">
    
        <div class="container" style="width:800px; margin:0 auto;">
    <div class="jumbotron" >
      <h1>Leaderboard</h1>
    </div>

      <?php
			$puntuaciones = simplexml_load_file("../xml/Puntuaciones.xml");
      echo '<table class="table table-hover">';
      echo "<tr><th> Usuario </th><th> Puntuacion </th></tr>";
      foreach($puntuaciones->puntuacion as $puntuacion)
      {
          echo"<tr>";
               echo"<td>".$puntuacion['user']."</td>";
               echo"<td>".$puntuacion."</td>";
          echo"</tr>";
      }
      echo "</table>";
      echo"<br>";
      ?>
      <input type="button" id="inicio" class="btn btn-primary" name="inicio" value="Ir a Inicio" onclick="window.location='Inicio.php'"><br>
    </div>

  </section>
</body>
</html>
