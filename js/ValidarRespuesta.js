var cont = 1;
function validarRespuesta()
{
  cont++;
  var mpista;
  if(document.getElementById("pistaDiv").innerHTML.length == 0)
  {
    pistaUsada = "no";
  }
  else
  {
    pistaUsada = "si";
  }
  console.log(mpista);
  $.ajax({
     url : '../php/VerificarRespuesta.php',
     type : 'POST',
     data: {respuesta:document.getElementById("respuesta").value,
            pista:pistaUsada},
     success : function (response)
     {
        document.getElementById("respuestaDiv").innerHTML = response;
        if(cont <= 5)
        {
          setTimeout(function myFunction()
          {
            $("#pistaDiv").html("");
            $("#respuestaDiv").html("");
            $("#respuesta").html("");
            cargarImagen();
          }, 1000);
        }
        else
        {
          console.log("Partida acabada");
          window.location = "../php/FinPartida.php";
        }
     },
     error : function ()
     {
       document.getElementById("respuestaDiv").innerHTML = "Error al validar la respues";
     }
   });
}
