<?php
  $id = 0;
  //Validar el formulario
  //marca imagen
  $formularioCorrecto = true;
  if(!isset($_POST['marca']))
  {
    echo "La marca esta vacia.";
    $formularioCorrecto = false;
  }
  if(!isset($_POST['pista']) && $formularioCorrecto)
  {
    $pista = "Esta son las dos primeras letras de la marca" + substr($_POST['marca'],0,2);
  }
  else
  {
    $pista = $_POST['pista'];
  }
  if ($_FILES['imagen']['size'] == 0 && $_FILES['imagen']['error'] == 0 && $formularioCorrecto)
  {
    echo "Añade una imagen por favor.";
    $formularioCorrecto = false;
  }

  if($formularioCorrecto)
  {
    //Insertar en XML
    $preguntas = simplexml_load_file("../xml/Preguntas.xml");
    if(!$preguntas)
    {
      echo("<script> alert ('Error xml')</script>");
    }
    else
    {
      echo("<script> alert ('Funciona xml')</script>");
      $pregunta = $preguntas->addChild('pregunta');
      $id = $preguntas['ultimo'];
      $id = $id + 1;
      $pregunta->addAttribute('id', $id);
      $preguntas['ultimo'] = $id;

      $pregunta->addChild("marca", $_POST['marca']);
      $pregunta->addChild("pista", $pista);

      $preguntas->asXML('../xml/Preguntas.xml');
    }

    $imagen_temporal = $_FILES['imagen']['tmp_name'];
    $imagen = addslashes(file_get_contents($imagen_temporal));

    //Conectarse a la BD
    include 'DBConfig.php';
    $mysql = mysqli_connect($servername, $username, $password, $database);
    if(!$mysql)
    {
      echo "Error link mysql";
      die ("Fallo al conectar a la BD" . mysqli_connect_error());
    }
    echo "Conectado correctamente";

    //Insertar en BD
    $insert = "INSERT INTO imagenes(id, imagen) VALUES ('$id', '$imagen')";
    if(!mysqli_query($mysql, $insert))
    {
      echo "Error al insertar en la BD";
      die("Error: " . mysqli_error($mysql));
    }
    echo "Pregunta añadida correctamente <br>";
  }
  else
  {
    echo "Error de validacion del formulario <br>";
  }
?>
