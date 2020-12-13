<?php
  function getNewId()
  {
    $preguntasPartida = simplexml_load_file("../xml/Partida.xml");
    $preguntasGeneral = simplexml_load_file("../xml/Preguntas.xml");

    $ultimo = intval($preguntasGeneral['ultimo']);
    $visitadas = range(1,$ultimo);
    shuffle($visitadas);
    $cont = 0;
    //print_r($visitadas);
    $id="0";
    while($cont<5)
    {
      $id = $visitadas[$cont];
      //echo $id . " ";

      $pregunta = $preguntasPartida->addChild('pregunta');
      $pregunta->addAttribute('id', strval($id));
      $pregunta->addChild("marca", $preguntasGeneral->pregunta[$id-1]->marca);
      $pregunta->addChild("pista", $preguntasGeneral->pregunta[$id-1]->pista);

      if($cont == 0)
      {
        $preguntasPartida['actual'] = strval($id);
      }
      $cont++;
    }
    $preguntasPartida->asXML('../xml/Partida.xml');
  }

  $newId = getNewId();
?>
