<?php
  $visitadas = array();

  $preguntasPartida = simplexml_load_file("../xml/Partida.xml");
  $preguntasGeneral = simplexml_load_file("../xml/Preguntas.xml");

  $ultimo = $preguntasGeneral['ultimo'];
  function getNewId()
  {
    $cont = 0;
    $id = rand(0, $ultimo);
    while($cont<10)
    {
      while(in_array($id, $visitadas))
      {
        $id = rand(0, $ultimo);
      }
      array_push($visitadas, $id);

      $pregunta = $preguntasPartida->addChild('pregunta');
      $preguntasPartida
      $pregunta->addAttribute('id', $id);
      $pregunta->addChild("marca", $preguntasGeneral->pregunta[$id]->marca);
      $pregunta->addChild("pista", $preguntasGeneral->pregunta[$id]->pista);

      $cont++;
    }
    $preguntasPartida->addAttribute('actual', $id);
    $preguntasPartida->asXML('../xml/Partida.xml');
  }

  $newId = getNewId();
?>
