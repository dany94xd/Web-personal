<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$mensaje = $_POST['mensaje'];

$destinatario = "danavinc@espol.edu.ec";
$asunto = "Envío de correo desde mi web";
$cuerpo = '<html>
<head>
  <title> Envíos desde mi web </title>
  </head>
  <body>
  <h1> Solicitud de contacto nuevo</h1>
  <p>
                Contacto:  ' . $nombre . ' - ' . $asunto . '  <br>
                Mensaje: ' . $mensaje . '
            </p>
        </body>
    </html>
';

//para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF8\r\n";

//dirección del remitente

$headers .= "FROM: $nombre <$correo>\r\n";
mail($destinatario, $asunto, $cuerpo, $headers);

echo "Correo enviado";
?>

<a href="index.html">Volver a inicio</a>