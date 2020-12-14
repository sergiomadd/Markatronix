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
			$puntuaciones = simplexml_load_file("../xml/Puntuaciones.xml");
      echo '<table>';
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
    </div>
  </section>
</body>
</html>
