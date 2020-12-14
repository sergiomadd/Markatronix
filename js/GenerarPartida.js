$(document).ready(function()
{
    $.ajax({
        type: "POST",
        url: "../php/GenerarPartida.php",
        success : function(data) {
            //console.log(data);
        },
        error : function ()
        {
          console.log("error");
        }
    });
});
