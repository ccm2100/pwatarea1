<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $edad = $_POST["edad"];
    
    // Configurar el correo electrónico
    $para = $email; // Cambia esto por la dirección de correo electrónico a la que deseas enviar el mensaje
    $asunto = "Nuevo formulario de contacto";
    $mensaje = "Nombre: $nombre\nCorreo Electrónico: $email\nEdad: $edad años";
    
    // Enviar el correo electrónico
    mail($para, $asunto, $mensaje);
    
    // Redirigir de vuelta a la página del formulario después del envío
    header("Location: formulario.html");
} else {
    // Si se accede directamente a este archivo sin enviar el formulario, redirigir a la página del formulario
    header("Location: formulario.html");
}
?>
