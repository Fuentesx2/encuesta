<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if (empty($nombre) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Manejo de errores o redirección a una página de error.
        echo "Por favor, complete todos los campos correctamente.";
        exit();
    }

    // Construye el cuerpo del correo
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Email: $email\n";

    // Resto del código de envío de correo

    // Muestra un mensaje de agradecimiento en la respuesta
    echo "¡Gracias por responder la encuesta!";

    // Puedes redirigir al usuario a una página de agradecimiento, si lo deseas.
    // header("Location: gracias.html");
    exit();
}
?>
