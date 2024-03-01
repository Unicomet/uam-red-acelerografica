<?php
include_once("include/config.php"); 

$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$contenido =
"<br>Nombre: ".$nombre.
"<br>Ciudad: ".$ciudad.
"<br>Correo: ".$correo.
"<br>Mensaje: ".$mensaje;

$subject  = "UAM | Formulario contacto";
$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <$fromCorreo>\r\n";
$headers .= 'Reply-to: '.$correo;

$to = $toCorreo;

if(mail($to,$subject,$contenido,$headers)){
    header("Location:$urlContacto");
}else{
    echo "<h1 align='center'>ERROR AL ENVIAR, INTENTALO MÁS TARDE</h1>";
    die();
}

?>
