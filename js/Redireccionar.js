function redireccionar(pagina)
{
  console.log("Hola");
  console.log(document.getElementById("nombre").value);
  if(document.getElementById("nombre").length > 0)
  {
    window.location = pagina;
  }
  else
  {
      console.log("poner nombre");
  }
}
