function sesion_iniciada(){
	var x = document.getElementById("gestion-nombre");
	var y = document.getElementById("cerrar_sesion");
x.style.display = "none";
y.style.display = "block";
}

function sesion_cerrada(){
var x = document.getElementById("gestion-nombre");
var y = document.getElementById("cerrar_sesion");
x.style.display = "block";
y.style.display = "none";
}

function cerrar_sesion(){
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
        	alert("sesion cerrada");
           	window.location = "../php/Inicio.php?";
        }
    }
    xmlhttp.open("GET","../php/DestruirSesion.php?",true);
    xmlhttp.send();
}
