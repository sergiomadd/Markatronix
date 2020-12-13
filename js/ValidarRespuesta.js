var cont = 1;
function validarRespuesta()
{
  console.log(cont);
  if(cont > 4)
  {
    console.log("Partida acabada");
    //pantallaFinal();
  }
  else
  {
    $.ajax({
       url : '../php/VerificarRespuesta.php',
       type : 'POST',
       data: {respuesta:document.getElementById("respuesta").value},
       success : function (response)
       {
          document.getElementById("respuestaDiv").innerHTML = response;
          cargarImagen();
       },
       error : function ()
       {
         document.getElementById("respuestaDiv").innerHTML = "Error al validar la respues";
       }
     });
     cont++;
  }
}
