<?php
include 'includes/send_mail.php';

$to = "your@gmail.com";  // Change to your test email
$subject = "Testing PHPMailer";
$message = "<strong>This is a test email sent using PHPMailer + Gmail.</strong>";

if(sendEmail($to, $subject, $message)) {
    echo "✅ Test mail sent!";
} else {
    echo "❌ Mail failed.";
}
?>
