<?php
require 'C:/xampp/htdocs/PHPMailer-master/PHPMailerAutoload.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'schusterchaya@gmail.com';
$mail->Password = 'r@ndom123';
$mail->setFrom('schusterchaya@gmail.com');
$mail->addAddress('chaya.p.schuster@gmail.com');
$mail->Subject = 'Return Email';
$mail->Body = $fname.' '.$lname .'  ' .$email .'  '.$message;
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "SUCCESS";
}

$mail2 = new PHPMailer;
$mail2->isSMTP();
$mail2->SMTPSecure = 'ssl';
$mail2->SMTPAuth = true;
$mail2->Host = 'smtp.gmail.com';
$mail2->Port = 465;
$mail2->Username = 'schusterchaya@gmail.com';
$mail2->Password = 'r@ndom123';
$mail2->setFrom('schusterchaya@gmail.com');
$mail2->addAddress($email);
$mail2->Subject = 'Return Email';
$mail2->Body = 'Thank you for contacting us. Someone will respond to you shortly';
//send the message, check for errors
if (!$mail2->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "SUCCESS";
}

