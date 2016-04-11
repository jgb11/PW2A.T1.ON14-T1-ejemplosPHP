<?php
require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
$to = 'txoppe@gmail.com';
$subject = 'Mensaje de prueba.';
$message = 'Correo electrónico de prueba enviado desde la función mail de php.';

/*
if (mail($to, $subject, $message)) {
  echo "Mensaje enviado.";
} else {
  echo "No enviado.";
}
*/

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "txoppe@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "Dd-76919231-dD";

$mail->setFrom('jgb11@outlook.com', 'Jose Luis Gonzalez');
# $mail->addAddress('d.tubio@pcarrier.com', 'David Tubío');
$mail->addAddress('txoppe@gmail.com', 'David Tubío');
$mail->addAttachment('mail.php');
$mail->isHTML(true);

$mail->Subject = 'Ejercicio clase PHPMailer Test - Jose Luis Gonzalez';
$mail->Body = 'Ejercicio de envío de mails desde PHPMailer';
$mail->AltBody = 'Ejercicio de envío de mails desde PHPMailer';

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>
