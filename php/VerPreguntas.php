<!DOCTYPE html>
<html>
<head>
  <style>
    table, th, td
    {
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <section class="main" id="s1">
    <div>
      <?php
        include '../php/DbConfig.php';
        $link= mysqli_connect($servername, $username, $password, $database);

        $preguntas = simplexml_load_file( "../xml/Preguntas.xml" );
        echo '<table>';
        echo "<tr><th>ID</th><th>Marca</th><th>Pista</th><th>Imagen</th></tr>";
        foreach($preguntas as $pregunta)
        {
            echo"<tr>";
                 echo"<td>".$pregunta['id']."</td>";
                 echo"<td>".$pregunta->marca."</td>";
                 echo"<td>".$pregunta->pista."</td>";
                 $pregunta = mysqli_query($link, "select * from imagenes where id='".$pregunta['id']."'");
                 $imagen = mysqli_fetch_array($pregunta);
                 echo"<td>".'<img src="data:image/jpg;base64,'.base64_encode( $row['imagen'] ).'" height="50" width="50"/>'."</td>";
            echo"</tr>";
       }
       echo "</table>";
       echo"<br>";
      ?>
    </div>
  </section>
</body>
</html>
