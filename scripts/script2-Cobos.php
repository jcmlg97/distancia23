<?php
/**
* @author Jesus
* @verion 1.0.0
*/

/**
* Esta función devuelve un saludo con el nombre que le enviamos
* y la fecha y hora actual
* @param string $nombre Es el nombre de la persona a la que saludamos
* @param date $fechayhora es la fecha y hora actual
* @return string saludo a la persona solicitada
*/
 date_default_timezone_set('Europe/Madrid');
 $fechaHora = date('d-m-Y h:i:s');
function saluda($nombre)
{
 date_default_timezone_set('Europe/Madrid');
 $fechaHora = date('d-m-Y h:i:s');
 echo "Hola " .$nombre;
 echo "la fecha y hora actual es: " . $fechaHora;
}
echo "<br/>Hasta pronto!<br/>"
?>
