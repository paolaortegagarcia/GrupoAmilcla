<?php


$nombre = $_POST['nombreCompleto'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$operacion = $_POST['operacion'];


$to = "grupoamilcla@hotmail.com";

$subject = "Nueva consulta - ($nombre)";


$message = "
<h2>Operación</h2>
<p>$operacion</p>

<h2>Datos de contacto</h2>
<p><strong>Nombre:</strong> $nombre</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Teléfono:</strong> $telefono</p>
";

$headers = "From: $email\r\n"


$mail_success = mail($to, $subject, $message, $headers);

if ($mail_success) {
    echo "¡Correo enviado con éxito!";
} else {
    echo "Error al enviar el correo. Por favor, revisa la configuración del servidor.";
}
?>
