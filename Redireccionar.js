function redireccionar(pagina)
{
  var nombre= document.getElementById("nombre").value;
  if(nombre.length == 0)
  {
    alert("¡Falta poner el nombre!");
  }
  else
  {
    crearsesion(nombre);
    window.location = pagina;
  }
}
