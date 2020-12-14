function crearsesion(nombre){
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            console.log("¡Tu sesion ha sido creada! Disfruta");
        }
    }
    console.log(nombre);
    xmlhttp.open("GET","../php/CrearSesion.php?nombre="+nombre,true);
    xmlhttp.send();
}
