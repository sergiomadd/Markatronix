<?php
session_start();
  function getNewId()
  {
    $preguntasPartida = simplexml_load_file("../xml/Partida.xml");
    $preguntasGeneral = simplexml_load_file("../xml/Preguntas.xml");

    $ultimo = intval($preguntasGeneral['ultimo']);
    $visitadas = range(1,$ultimo);
    shuffle($visitadas);
    $cont = 0;
    $id="0";
    while($cont<5)
    {
      $id = $visitadas[$cont];
      $pregunta = $preguntasPartida->addChild('pregunta');
      $pregunta->addAttribute('id', strval($id));
      $pregunta->addAttribute('puntos', "");
      $pregunta->addChild("marca", $preguntasGeneral->pregunta[$id-1]->marca);
      $pregunta->addChild("pista", $preguntasGeneral->pregunta[$id-1]->pista);
      $pregunta->addChild("respuesta", "");
      if($cont == 0)
      {
        $preguntasPartida['actual'] = strval($id);
        $preguntasPartida['puntos'] = "0";
      }
      elseif($cont == 4)
      {
        $pregunta['puntos'] = "ultima";
      }
      $cont++;
    }
    $preguntasPartida->asXML('../xml/Partida.xml');
  }

  $newId = getNewId();
?>
