$(document).ready(function()
{
      cargarImagen();
});

function cargarImagen()
{
  var form = $('#formulario')[0];
  var formData = new FormData(form);
  $.ajax({
     url : '../php/ActualizarImagen.php',
     type : 'POST',
     data: formData,
     processData: false,
     contentType: false,
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
