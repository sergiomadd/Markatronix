$(document).ready(function()
{
  cargarImagen();
});

function cargarImagen()
{
  $.ajax({
     url : '../php/ActualizarImagen.php',
     type : 'POST',
     success : function (response)
     {
       document.getElementById("imagenDiv").innerHTML = response;
     },
     error : function ()
     {
       document.getElementById("imagenDiv").innerHTML = "Error al añadir la imagen :(";
     }
   });
}
