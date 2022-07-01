<?php

$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['message'];

//Como va llegar el cuerpo del mensaje//
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$destinatario = 'gianz12@hotmail.com';
$asunto = 'Este correo fue enviado desde la web AICAM';

//function mail
mail ($destinatario, $asunto, utf8_decode($mensaje), $header);
//Redireccion
header( "Location:exito.html" );
?>
