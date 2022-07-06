<?php
 //ESTE FORMULARIO SI FUNCIONA
  //ESTE FORMULARIO SI FUNCIONA
if($_POST) {
    $name = "";
    $email = "";
    $message = "";
     
    if(isset($_POST['name'])) {
      $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['message'])) {
        $message = htmlspecialchars($_POST['message']);
    }
     
     $recipient = "gianz12@hotmail.com";
     
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
     
    if(mail($recipient, $email, $message, $headers)) {
        header( "Location:exito.html" );
    } else {
        echo '<p>No se pudo enviar el mensaje.</p>';
    }
     
} else {
    echo '<p>Algo ocurrio, !ERROR!</p>';
}
 
?>