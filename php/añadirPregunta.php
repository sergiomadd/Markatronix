<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <?php
    //Conectarse a la BD
    include 'DBConfig.php';
    $mysql = mysqli_connect($servername, $username, $password, $database);
    if(!$mysql)
    {
      echo "Error link mysql";
      die ("Fallo al conectar a la BD" . mysqli_connect_error());
    }
    echo "Conectado correctamente";

    //Validar el formulario
    //marca imagen
    $formularioCorrecto = true;
    if($_POST['marca'] = '')
    {
      echo "La marca esta vacia.";
      $formularioCorrecto = false;
    }
    if ($_FILES['imagen']['size'] == 0 && $_FILES['imagen']['error'] == 0)
    {
      echo "Añade una imagen por favor.";
      $formularioCorrecto = false;
    }


    if($formularioCorrecto)
    {
      $imagen_temporal = $_FILES['imagen']['tmp_name'];
      $imagen = addslashes(file_get_contents($imagen_temporal));
      //Insertar en BD
      $insert = "INSERT INTO preguntas(marca, imagen) VALUES ('$_POST[marca]', $imagen)";
      if(!mysqli_query($mysql, $insert))
      {
        echo "Error al insertar en la BD";
        die("Error: " . mysqli_error($mysql));
      }
      echo "Pregunta añadida correctamente <br>";

      //Insertar en XML
      $xml = simplexml_load_file("../xml/Preguntas.xml");
      if(!$xml)
      {
        echo("<script> alert ('Error xml')</script>");
      }
      else
      {
        echo("<script> alert ('Funciona xml')</script>");
        $pregunta = $xml->addChild('assessmentItem');
        $pregunta->addAttribute('subject', $_POST['tema']);
        $pregunta->addAttribute('author', $_POST['correo']);

        $itemBody = $pregunta->addChild("itemBody");
        $itemBody->addChild('p', $_POST['enun']);
        $correctResponses = $pregunta->addChild("correctResponse");
        $correctResponses->addChild("response", $_POST['resc']);

        $incorrectResponses = $pregunta->addChild("incorrectResponses");
        $incorrectResponses->addChild("response", $_POST['resi1']);
        $incorrectResponses->addChild("response", $_POST['resi2']);
        $incorrectResponses->addChild("response", $_POST['resi3']);

        $xml->asXML('../xml/Questions.xml');
      }
    }
    else
    {
      echo "Error de validacion del formulario <br>";
    }
  ?>
</body>
</html>
