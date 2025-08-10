<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sendEmail($to, $subject, $messageBody) {
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your@gmail.com';  // NEW sender email
        $mail->Password   = '-';         // Gmail app password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender and recipient
        $mail->setFrom('sender email', 'Sonar Bangla Bank Ltd.'); 
        $mail->addAddress($to);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $messageBody;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
?>
