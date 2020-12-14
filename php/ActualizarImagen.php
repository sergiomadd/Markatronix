<?php
  //Declaracion de variables
  $preguntasPartida = simplexml_load_file("../xml/Partida.xml");
  $idImagen = $preguntasPartida['actual'];
  echo"<script>console.log(".$idImagen.")</script>";
  include 'DBConfig.php';
  $mysql = mysqli_connect($servername, $username, $password, $database);
  if(!$mysql)
  {
    echo "Error link mysql";
    die ("Fallo al conectar a la BD" . mysqli_connect_error());
  }

  $sql = "SELECT * from imagenes where id=".$idImagen;
  $pregunta = mysqli_query($mysql, $sql);
  if(!$pregunta)
  {
    echo "Error al obtener la imagen";
  }
  $imagen = mysqli_fetch_array($pregunta)['imagen'];

  echo '<img src="data:image/jpg;base64,'.base64_encode( $imagen ).'" height="400" width="400"/>';
?>
