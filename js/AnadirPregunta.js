$(document).ready(function() {
  $("#enviar").click(function(){
    var form = $('#formulario')[0];
    var formData = new FormData(form);
    $.ajax({
       url : '../php/AnadirPregunta.php',
       type : 'POST',
       data: formData,
       processData: false,
       contentType: false,
       success : function (response)
       {
          document.getElementById("insercion").innerHTML = response;
       },
       error : function ()
       {
         document.getElementById("insercion").innerHTML = "Error al añadir la pregunta :(";
       }
     });
  });
});
