<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $fecha = date('Y-m-d H:i:s');

    // Formato estructurado del archivo de texto
    $contenido = "Fecha: $fecha\nNombre: $nombre\nEmail: $email\nMensaje: $mensaje\n";
    $contenido .= "----------------------------------------------------------\n";

    // Guarda los datos añadiéndolos al final del archivo existente
    if (file_put_contents("mensajes.txt", $contenido, FILE_APPEND)) {
        echo "<script>alert('¡Mensaje enviado con éxito, Harold! Se ha registrado correctamente.'); window.location.href='index.php';</script>";
    } else {
        echo "Hubo un error al procesar el envío de información.";
    }
} else {
    header("Location: index.php");
    exit();
}
?>