XMLHttpRequestObject = new XMLHttpRequest();
XMLHttpRequestObject.onreadystatechange = function()
{
  if (XMLHttpRequestObject.readyState == 4 )
  {
    var xml = XMLHttpRequestObject.responseXML;
    var marca = xml.getElementsByTagName("marca");
    var pista = xml.getElementsByTagName("pista");
    var imagen = xml.getElementsByTagName("imagen");
  }
}

function cargarPregunta()
{
  XMLHttpRequestObject.open("POST", "../php/añadirPregunta.php");
  XMLHttpRequestObject.send("?marca="+marca+"&pista="+pista+"&imagen="+imagen);
}