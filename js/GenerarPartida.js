$(document).ready(function()
{
  alert("COSA DE GENERAR");
    $.ajax({
        type: "POST",
        url: "../php/GenerarPartida.php",
        success : function(data) {
            console.log(data);
        },
        error : function ()
        {
          console.log("error");
        }
    });
});

/*document.onload = function() {
var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            alert("Preparate para jugar!");
        }
    }
    xmlhttp.open("GET","../php/GenerarPartida.php?",true);
    xmlhttp.send();
};*/
