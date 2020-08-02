<?php
// $nombre = '';
// $correo = '';
// $mensaje = '';
$errores = '';
$enviado = '';

if(isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

// Validación del Nombre
    if (!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);  
    }else {
        $errores .= 'Por favor escribe tu nombre <br/>';
    }
// Validación del Correo
    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        if(!filter_var($correo, FILTER_SANITIZE_STRING)){
            $errores .= 'Por favor ingresa un correo válido <br/>';
        }
    } else {
        $errores .= 'Por favor ingresa un correo <br/>';
    }
// Validación del Mensaje
    if(!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripcslashes($mensaje);
    } else {
        $errores .= 'Por favor escribe tu mensaje';
    }

    if(!$errores) {
        $enviar_a = 'alfredonpb@gmail.com';
        $asunto = 'Correo enviado desde www.alfredo.bytehost32.com';
        $mensaje_enviado = "De: $nombre \n";
        $mensaje_enviado .= "Correo: $correo \n";
        $mensaje_enviado .= "Mensaje: " . $mensaje;

         mail($enviar_a, $asunto, $mensaje_enviado);
       
        $enviado = true;
    }
}

require 'formularioView.php';


?>