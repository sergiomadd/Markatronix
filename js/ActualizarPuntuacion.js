function actualizarPuntuacion(respuesta)
{
  	var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange=function(){
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
              console.log("¡tu sesion ha sido creada! Disfruta");
          }
      }
      console.log(nombre);
      xmlhttp.open("POST","../php/ActualizarPuntuacion.php",true);
      xmlhttp.send("?respuesta="+respuesta);
}
