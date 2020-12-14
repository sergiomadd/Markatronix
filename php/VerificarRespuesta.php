<?php
  //Declaracion de variables
  //Se usa xpath para conseguir el siguiente y devuelve un SimpleXMLObject
  //SimpleXMLElement Object ( [@attributes] => Array ( [id] => 1 )
  //[marca] => nike [pista] => SimpleXMLElement Object ( ) )
  //Luego se accede al atributo
  $respuesta = $_REQUEST['respuesta'];
  $marca = "";
  $idImagen = "";
  $idNextImagen = "";
  $preguntasPartida = simplexml_load_file("../xml/Partida.xml");
  $preguntaAux;
  $idActual = $preguntasPartida['actual'];

  foreach($preguntasPartida->pregunta as $pregunta)
  {
    if(strcmp($pregunta['id'], $idActual) == 0)
    {
      $preguntaAux = $pregunta;
      $pregunta->respuesta =$respuesta;
      $marca = $pregunta->marca;
      $idImagen = $pregunta['id'];
      if(strcmp($pregunta['puntos'], "ultima") != 0)
      {
        $nextPregunta = $pregunta->xpath('following-sibling::pregunta[1]')[0];
        $idNextImagen = $nextPregunta->attributes()->{'id'};
      }
    }
  }
  $preguntasPartida['actual'] = $idNextImagen;

  if($respuesta == $marca)
  {
    if($_REQUEST['pista'] == "no")
    {
        $preguntasPartida['puntos'] = $preguntasPartida['puntos'] + 1;
        $preguntaAux['puntos'] = "1";
    }
    else
    {
        $preguntasPartida['puntos'] = $preguntasPartida['puntos'] + 0.5;
        $preguntaAux['puntos'] = "0.5";
    }
    echo $respuesta. " es correcta! :)";
  }
  else
  {
    $preguntaAux['puntos'] = "0";
    echo $respuesta. " NO es correcta! :(";
  }
  $preguntasPartida->asXML('../xml/Partida.xml');
?>
