function actualizarImagen(){
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("imagen").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","../php/ActualizarImagen.php",true);
    xmlhttp.send();
}
function actualizarXML(){
	
}