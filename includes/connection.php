<?php 
//Php Mailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../vendor/autoload.php";

//phpmailer object

$mail = new PHPMailer(true);

// From email address and name
$mail->From = "dayisi@test.com";
$mail->FromName = "Iyanu Dayisi Tobi";

// To address and name
$mail->addAddress("tobiy23@gmail.com");

//Address recipient will reply to
$mail->addReplyTo("tdayisi@yahoo.com", "reply");

//CC and BCC
$mail->addCC("joedaisey61@gmail.com");
$mail->addBCC("idaysi@outlook.com");

//Send HTML or plain text email
$mail->isHTML(true);

$mail->Subject = "Request";
$mail->Body = "<p>Testing PHP mailer</p>";
$mail->AltBody = "Plain text Test";


try {
    $mail->send();
    echo "Mail sent successfuly";
}catch(Exception $e) {
    echo "Mail Error: " . $mail->ErrorInfo;
}




?>