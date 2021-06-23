<?php 

//Php Mailer
require "../vendor/phpmailer/phpmailer/src/PHPMailer.php";
require "../vendor/phpmailer/phpmailer/src/SMTP.php";
require "../vendor/phpmailer/phpmailer/src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "../vendor/autoload.php";

//Check if the form is submitted



//phpmailer object

$mail = new PHPMailer(true);

//SMTP debug
// $mail->SMTPDebug = 3;

// set to use SMTP
$mail->isSMTP();

//Set SMTP host name
$mail->Host = "smtp.elasticemail.com";

//SMTP Auth
$mail->SMTPAuth = true;


if(isset($_POST['submit_request'])){
     $name = trim($_POST['name']); $email = trim($_POST['email']); $request = trim($_POST['request']);

     //Provide Username and Password
     $mail->Username = "tobiy23@gmail.com";
     $mail->Password = "0C279D3623629C0ABB5FB8B8067710CAE87C";
     

    // SMTP  tls encrypt
    $mail->SMTPSecure = "tls";

    // SMTP port 
    $mail->Port = "2525";

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );

    // From email address and name
    $mail->setFrom($email);
    $mail->FromName = $name;

    // To address and name
  //  $mail->addAddress("kayolatunji2@gmail.com");
  $mail->addAddress("kayodeolatunji@realfamilyaffairs.com");

    //Address recipient will reply to
    $mail->addReplyTo("kayodeolatunji@realfamilyaffairs.com", "reply");  

    //CC and BCC
    $mail->addCC("kayolatunji2@gmail.com");
    ///$mail->addBCC("idaysi@outlook.com");

    //Send HTML or plain text email
    $mail->isHTML(true);

    $mail->Subject = "Request";
    $mail->Body = "<p  >" .$request . "</p>";
    $mail->AltBody = $request;


    try {
        $mail->Send();
        $redirect = "../contact_me.php?type=success&msg=Request Sent!";
        header("Location: $redirect");
    }catch(Exception $e) {
        $redirect = "../contact_me.php?type=error&msg=".$mail->ErrorInfo;
        header("Location: $redirect");  
    }
}












if(isset($_POST['submit_speak_request'])){
    $name = trim($_POST['name']);
    $engagement = trim($_POST['engagement']);
    $email = trim($_POST['email']);
    $venue = trim($_POST['venue']);
    $phone = trim($_POST['phone']);
    $date = trim($_POST['date']);

     //Provide Username and Password
     $mail->Username = "tobiy23@gmail.com";
     $mail->Password = "0C279D3623629C0ABB5FB8B8067710CAE87C";
     

    // SMTP  tls encrypt
    $mail->SMTPSecure = "tls";

    // SMTP port 
    $mail->Port = "2525";

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );

    // From email address and name
    $mail->setFrom($email);
    $mail->FromName = $name;

    // To address and name
  //  $mail->addAddress("kayolatunji2@gmail.com");
  $mail->addAddress("kayodeolatunji@realfamilyaffairs.com");

    //Address recipient will reply to
    $mail->addReplyTo("kayodeolatunji@realfamilyaffairs.com", "reply");  

    //CC and BCC
    $mail->addCC("kayolatunji2@gmail.com");
    ///$mail->addBCC("idaysi@outlook.com");

    //Send HTML or plain text email
    $mail->isHTML(true);

    $mail->Subject = "Engagement";
    $mail->Body = "<p  >" .$engagement . "</p>";
    $mail->AltBody = $request;


    try {
        $mail->Send();
        $redirect = "../contact_me.php?type=success&msg=Request Sent!";
        header("Location: $redirect");
    }catch(Exception $e) {
        $redirect = "../contact_me.php?type=error&msg=".$mail->ErrorInfo;
        header("Location: $redirect");  
    }



}

$mail->smtpClose();


?>
