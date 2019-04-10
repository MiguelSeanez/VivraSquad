<?php 
    error_reporting(0); 
    $nombre = $_POST['contact_name']; 
    $correo_electronico= $_POST['contact_email']; 
    $comentario=$_POST['contact_message']; 
    $header = 'From: ' . $correo_electronico ."\r\n"; 
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
    $header .= "Mime-Version: 1.0 \r\n"; 
    $header .= "Content-Type: text/plain"; 

    $mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
    $mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n"; 
    $mensaje .="Comentarios: ".$_POST['contact_message'] . " \r\n"; 
    $mensaje .= "Enviado el " . date('d/m/Y', time()); 

    $para = 'jmiguel_rs@hotmail.com'; 
    $asunto = 'VivraSquad page form'; 

    mail($para, $asunto, utf8_decode($mensaje), $header); 

?> 

<a href="<? echo $HTTP_REFERER; ?>">Volver atras</a>