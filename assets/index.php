<?php

$to = "richardsonasilva@gmail.com";
$subject = "Teste de envio de e-mail";
$message = "Olá, você é demais";
$headers = "From: teste@teste.com" . "\r\n" . 
    "Reply-To: teste@teste.com";

mail($to, $subject, $message, $headers);

print "Enviado!";

?>