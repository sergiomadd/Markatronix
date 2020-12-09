function redireccionar(pagina)
{
  var nombre= document.getElementById("nombre").value;
  if(nombre.length == 0)
  {
    var x = document.getElementById("gestion-nombre");
    if(x.style.display === "none"){
      window.location = pagina;
    }
    else{
      alert("¡Falta poner el nombre!");
    }
  }
  else
  {
    crearsesion(nombre);
    window.location = pagina;
  }
}
