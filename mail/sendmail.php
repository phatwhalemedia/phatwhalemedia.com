<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Send Mail Function
if (isset($_POST['submit'])) {
//define variables
   $sender = $_POST['fname']  . ' ' . $_POST['lname'];
   $email  = $_POST['email'];
   $phone  = $_POST['region'] . ' ' . $_POST['phone'];
   $body   = $_POST['body'];
//initiate PHPMailer
    $mail = new PHPMailer();
//Server Settings
//Uncomment the next line for Debugging
  //$mail->SMTPDebug    = 3;
    $mail->isSMTP();
    $mail->Host         = 'mail.phatwhalemedia.com';
    $mail->SMTPAuth     = true;
    $mail->Username     = 'mailer@phatwhalemedia.com';
    $mail->Password     = '********';
    $mail->SMTPSecure   = 'ssl';
    $mail->Port         = 465;
//Headers
    $mail->setFrom('mailer@phatwhalemedia.com', 'Phat Whale Mail Delivery');
    $mail->AddAddress('contacto@phatwhalemedia.com');
//  $mail->AddReplyTo("noreply@biaambiental.mx");
//Message Info
    $mail->Subject  = 'Phat Whale Media | Express Mail Delivery';
    $mail->Body     =
        "=== Phat Whale Media | Correo Electrónico de www.phatwhalemedia.com ===" .
        "\n\n--- BEGIN EMAIL ---" .
        "\n\nContacto: "  . $sender .
        "\n-----------------------------------" . "\nEmail: "     . $email .
        "\n-----------------------------------" . "\nTelefono: "  . $phone .
        "\n-----------------------------------" . "\nAsunto: "    . $body  .
        "\n\n--- END EMAIL ---" .
        "\n\n=== This message was delivered at the speed of whale ===";
    $mail->Altbody  =  "-----------------------------------" . "\nContacto: "  . $sender .  "\n-----------------------------------" . "\nEmail: " . $email . "\n-----------------------------------" . "\nAsunto: " . $body;
//Check if succesful
if (!$mail->send()){
    $status = $mail->ErrorInfo;
} else {
    $mail->smtpClose();
}
}
