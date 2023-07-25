<?php
// Retrieve the data sent from the HTML form
$rollNumber = $_POST['rollNumber'];
$guests = $_POST['guests'];
$email = $_POST['email'];

// Include the PHPMailer library
require 'phpMailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'sunishithdaram@gmail.com'; 
$mail->Password = 'pwefljqldablxppe'; 
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

// Sender and recipient
$mail->setFrom('sunishithdaram@gmail.com', 'Sunishith Daram'); 
$mail->addAddress($email); 
// Email content
$mail->isHTML(true);
$mail->Subject = 'QR Code Email';
$mail->Body = 'Please find your QR code attached.';
$mail->addStringAttachment(base64_decode($qrCode)); 
// 'qr_code.png');  Assuming you have the QR code data in $qrCode

// Send email
if ($mail->send()) {
  echo 'Email sent successfully';
} else {
  echo 'Error sending email: ' . $mail->ErrorInfo;
}
?>
