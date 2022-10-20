<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
function mailing($email, $subject, $content)
{
    $mail   = new PHPMailer();
    try {
        $mail->SMTPDebug  =      0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       =     'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   =     true;                                   //Enable SMTP authentication
        $mail->Username   =     'your.heart.is.sight@gmail.com';                     //SMTP username
        $mail->Password   =     'nbdyvwrfjipmajts';                               //SMTP password
        $mail->SMTPSecure =     'tls';                                  //Enable TLS encryption, `ssl` also accepted;            //Enable implicit TLS encryption
        $mail->Port       =     587;                                    //Set the SMTP port for the GMAIL server;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $email            =     $_POST['email'];
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress("$email", 'Joe User');     //Add a recipient
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject    =     $subject;
        $mail->Body       =     $content;
        $mail->AltBody    =     $subject;
        $mail->send();
    } catch (Exception $e) {
      throw new Exception($e);
      return;
    }
}