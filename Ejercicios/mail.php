<?php

$nombre = "Fredy Gonzáles";
$mail = "fredygonzales03@gmail.com";
$mensaje_form = "Compra realizada con éxito.";

//
$mensaje = "Este mensaje fue enviado por ".$nombre .",\r\n";
$mensaje .= "Su e-mail es: ". $mail ." \r\n";
$mensaje .= "Mensaje: ". $mensaje_form ." \r\n";
$mensaje .= "Enviado el : ". date('d/m/Y', time());

$para = "fredygonzales03@gmail.com";
$asunto = "Esta mail fue enviado desde la web.";

//mail($para, $asunto, mb_convert_encoding($mensaje,'ISO-8859-1', 'UTF-8'),$header);

//header('Location:mail_exito.html');
//header('Location:mail_exito.html');

$success = mail($para, $asunto, mb_convert_encoding($mensaje,'ISO-8859-1', 'UTF-8'),$header);
if (!$success) {
    $errorMessage = error_get_last()['message'];

    echo $errorMessage;
}
else{
    echo "OK, mensaje enviado.";
}

?>