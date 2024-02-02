<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'vendor/autoload.php';
//require 'PHPMailer/PHPMailerAutoload.php';
// Create a PHPMailer object
$mail = new PHPMailer;

// Set the mailer to use SMTP
$mail->isSMTP();

// Set the SMTP host name
$mail->Host = 'localhost';

// Set the SMTP port number
$mail->Port = 465;

// Set the SMTP username and password, if required
$mail->SMTPAuth = true;
$mail->Username = 'nahom@nahom.com';
$mail->Password = '12345678';

// Set the sender address and name
$mail->setFrom('nahom@nahom.com', 'Nahom W');

// Set the recipient address and name
$mail->addAddress('nahometete@gmail.com', 'Your Friend');

// Set the email subject
$mail->Subject = 'Test email from James server';

// Set the email body
$mail->Body = 'Hello, this is a test email from my local James server.';

if ($mail->send()) {
    echo 'Email sent successfully.';
} else {
    echo 'Email sending failed: ' . $mail->ErrorInfo;
    var_dump($mail);
}