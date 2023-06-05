<?php


if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: contacto.html");
}
$nombre = $_POST ['nombre']
$apellido = $_POST ['apellido']
$email = $_POST ['email']
$asunto = $_POST ['asunto']
$mensaje = $_POST ['mensaje']

if(empty(trim($nombre))) $nombre = 'anonimo';
if(empty(trim($apellido))) $apellido = '';

$body = <<<HTML
<h1>Contacto desde la web</h1>
<p>De: $nombre $apellido / $email</p>
<h2>Mensaje</p>
$mensaje
HTML;


var_dump($nombre);
$headers = "MIME-version: 1.0 \r\n";
$headers.= "content-type: text/html; charset=utf-8 \r\n";

$rta = mail('contacto@fodiem.com', "Mnesaje web: $asunto", $body, $headers);
var_dump($rta);
$headers.= "From: $nombre $apellido <$email> \r\n";
$headers.= "To: contacto@fodiem.com \r\n";
$headers.= "Cc copia@email.com \r\n";
$headers.= "Bcc copia@email.com \r\n";

