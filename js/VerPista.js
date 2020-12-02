XMLHttpRequestObject = new XMLHttpRequest();
XMLHttpRequestObject.onreadystatechange = function()
{
  if (XMLHttpRequestObject.readyState == 4)
  {
    var xml = XMLHttpRequestObject.responseXML;
    var pista = xml.getElementsByTagName("pista");
    if (pista == "")
    {
    	var iniciales = xml.getElementsByTagName("marca").substring(0,2);
    	pista = "Empieza por "+iniciales+"...";
    }
    document.getElementById("pista").innerHTML = pista;
  }
}

function pedirPista()
{
  XMLHttpRequestObject.open("GET", "../xml/preguntas.xml");
  XMLHttpRequestObject.send(null);
}