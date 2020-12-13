<?php
  $preguntasPartida = simplexml_load_file("../xml/Partida.xml");
  //solo se elimina uno cada vez incluso con el for each
  foreach($preguntasPartida->pregunta as $pregunta)
  {
    unset($pregunta[0]);
  }
  $preguntasPartida['actual'] = "0";
  $preguntasPartida->asXML('../xml/Partida.xml');
?>
