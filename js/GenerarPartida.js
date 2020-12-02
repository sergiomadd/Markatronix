window.onload = function() {
var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            alert("Preparate para jugar!");
        }
    }
    xmlhttp.open("GET","../php/GenerarPartida.php",true);
    xmlhttp.send();
};