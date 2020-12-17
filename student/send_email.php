<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/*require_once "vendor/autoload.php";*/

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//From email address and name
$mail->From = "banshita20@gmail.com";
$mail->FromName = "banshita";

//To address and name
$mail->addAddress("banshitagangwar2000@gmail.com", "Banshita Gangwar");
/*$mail->addAddress("recepient1@example.com");*/ //Recipient name is optional

//Address to which recipient will reply
/*$mail->addReplyTo("reply@yourdomain.com", "Reply");

//CC and BCC
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");
*/
//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>email testing</i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}