<?php

//llamando a los campos
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

//datos para el correro
$destinatario = "elmatiasmoreno@hotmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta.= "Correo: $correo \n ";
$carta.= "Telefono: $telefono \n";
$carta.= "Mensaje $mensaje";

//enviando correo
mail($destinatario, $asunto, $carta);
header("Location: mensaje-de-envio.html");

?>