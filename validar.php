<?php
$name = $_POST['nombre'];
$message = $_POST['mensaje'];

$header = 'From: ' $nombre " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "mensaje: " . $_POST['mensaje'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'bcaullan777@gmail.com';
$asunto = 'ASUNTO';


mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
