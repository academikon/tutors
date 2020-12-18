<?php

    // Llamando a los campos
    $nombre = $_POST['name'];
    $apellido = $_POST['surname'];
    $correo = $_POST['email'];
    $telefono = $_POST['phone'];
    $mensaje = $_POST['message'];
    // Datos para el correo
    $destinatario = "cb01grupo@gmail.com, dabril@uninorte.edu.co";
    $asunto = "Contacto desde nuestra web";

    $carta  = "Nombre y Apellido: $nombre $apellido \n";
    $carta .= "Correo: $correo \n";
    $carta .= "Telefono: $telefono \n";
    $carta .= "Mensaje: $mensaje \n";
    
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$nombre." ".$apellido."\" <".$correo.">\n";

    // Enviando Mensaje
    $response = mail($destinatario, $asunto, $carta, $headers);

    if($response){
        var noti_mail = new Notification( "Mensaje Enviado" )
        setTimeout( function() { noti_mail.close() }, 1000)
    }else
    {
        var_dump($response);
    }
?>