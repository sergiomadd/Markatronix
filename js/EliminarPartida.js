$(document).ready(function()
{
  var cont = 1;
  while(cont<100)
  {
    eliminar();
    cont++;
  }

});

function eliminar()
{
  $.ajax({
     url : '../php/EliminarPartida.php',
     type : 'POST',
     success : function (response)
     {
        console.log("Eliminado");
     },
     error : function ()
     {
       console.log("Error al eliminar");
     }
   });
}
