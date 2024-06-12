<?php 
$email = filter_var($_POST['correo'],FILTER_SANITIZE_EMAIL);
$nombre = filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
$texto = filter_var($_POST['mensaje'],FILTER_SANITIZE_STRING;

if(!empty($email) && !empty($nombre) && !empty($texto)){
    $destino = 'michaelantoniorequesfernandez@gmail.com';
    $asunto = 'Email de prueba';

    $cuerpo ='
    <html>
        <head>
            <title>Prueba de correo</title<>
        </head>
        <body>
            <h1>Email de '.$nombre.'</h1>
            <p> '.$texto.'</p>    
        </body>
    </html>
    ';

    //para el envio en formato html
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    //direccion del remitente
    $headers .= "From: $nombre <$email> \r\n ";

    //ruta del mensaje desde origen a destino

    $headers .= "Return-path: $destino\r\n";

    mail($destino,$asunto,$cuerpo,$headers);
    echo"Emaill enviado correctamente";    
}else{
    echo "Error al enviar el email";
}
?>