XMLHttpRequestObject = new XMLHttpRequest();
XMLHttpRequestObject.onreadystatechange = function()
{
  if (XMLHttpRequestObject.readyState == 4)
  {
    var xmlDoc = XMLHttpRequestObject.responseXML;
    var preguntas = xmlDoc.getElementsByTagName('pregunta');
    var pista = "";
    var actual = xmlDoc.getElementsByTagName('preguntas')[0].getAttribute('actual');
    for(i=0;i<preguntas.length;i++)
    {
      if(preguntas[i].getAttribute('id') == actual)
      {
        pista = preguntas[i].childNodes[1].textContent;
      }
    }
    document.getElementById("pistaDiv").innerHTML = pista;
  }
}

function pedirPista()
{
  XMLHttpRequestObject.open("GET", "../xml/Partida.xml");
  XMLHttpRequestObject.send(null);
}
