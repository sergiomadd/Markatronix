<?php
  //Declaracion de variables
  $marca = "";
  $idImagen = "";
  $idNextImagen = "";
  $preguntasPartida = simplexml_load_file("../xml/Partida.xml");
  $idActual = $preguntasPartida['actual'];

  foreach($preguntasPartida->pregunta as $pregunta)
  {
    if(strcmp($pregunta['id'], $idActual) == 0)
    {
      $marca = $pregunta->marca;
      $idImagen = $pregunta['id'];
      $nextPregunta = $pregunta->xpath('following-sibling::pregunta[1]')[0];
      //Se usa xpath para conseguir el siguiente y devuelve un SimpleXMLObject
      //SimpleXMLElement Object ( [@attributes] => Array ( [id] => 1 )
      //[marca] => nike [pista] => SimpleXMLElement Object ( ) )
      //Luego se accede al atributo
      $idNextImagen = $nextPregunta->attributes()->{'id'};
    }
  }
  $preguntasPartida['actual'] = $idNextImagen;
  $preguntasPartida->asXML('../xml/Partida.xml');
  $respuesta = $_REQUEST['respuesta'];
  if($respuesta == $marca)
  {
    echo $respuesta. " es correcta! :)";
  }
  else
  {
    echo $respuesta. " NO es correcta! :(";
  }
?>
