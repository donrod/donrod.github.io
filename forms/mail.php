<?php
if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: index.html" );
}
 
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De: $nombre / $email</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;

$rta = $mailer->send( );

//var_dump($rta);
header("Location: gracias.html" );
