<?php
require_once "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer;

$mail->From = "navidml6453@gmail.com";
$mail->FromName = "Full Name";
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Username = 'navidml6453@gmail.com';
$mail->Password = 'xuzd wzbd eyhw mdvx'; // Please replace with your actual Gmail password
$mail->SMTPSecure = 'tls'; // Use 'ssl' or 'tls'
$mail->Host = 'smtp.gmail.com'; // Set the correct SMTP server

$mail->Port = 587; // Use 465 for SSL

$mail->addAddress("naveed.ahmed6453@gmail.com", "Recipient Name");

$mail->isHTML(true);
$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent successfully";
}
?>
