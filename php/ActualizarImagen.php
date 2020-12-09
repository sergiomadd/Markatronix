<?php
  echo "<script>alert('ACTUALIZANDO IMAGEN');</script>";
  include 'DBConfig.php';
  $mysql = mysqli_connect($servername, $username, $password, $database);
  if(!$mysql)
  {
    echo "Error link mysql";
    die ("Fallo al conectar a la BD" . mysqli_connect_error());
  }
  echo "Conectado correctamente";

  $preguntasPartida = simplexml_load_file("../xml/Partida.xml");
  $id = $preguntasPartida['actual'];
  $newPregunta=$preguntasPartida->marca;
  $newPregunta = $preguntasPartida->pregunta[$id];
  $newId = $newPregunta['id'];

  $sql = "SELECT * from imagenes where id=".$newId;
  $pregunta = mysqli_query($mysql, $sql);
  $imagen = mysqli_fetch_array($pregunta)['imagen'];
  $id = mysqli_fetch_array($pregunta)['id'];

  echo $imagen;
?>
