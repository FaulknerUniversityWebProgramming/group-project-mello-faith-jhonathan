
  
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
require '/usr/share/php/libphp-phpmailer/class.smtp.php';
//require '/home/codio/workspace/group-project-mello-faith-jhonathan/try2.php';
require 'vendor/autoload.php';
$mail = new PHPMailer();
$mail->setFrom('faithp.king@gmail.com');
$mail->addAddress('faithp.king@gmail.com');
$mail->Subject = 'Message sent by PHPMailer';
$mail->Body = 'Hello! use PHPMailer to send email using PHP';
$mail->IsSMTP();
$mail->SMTPSecure = 'tls';
$mail->Host = gethostbyname('smtp.gmail.com');
$mail->SMTPAuth = true;
$mail->Port = 465;

//Set your existing gmail address as user name
$mail->Username = 'faithp.king@gmail.com';

//Set the password of your gmail address here
$mail->Password = 'Perspective22';
if(!$mail->send()) {
  echo 'Email is not sent.';
  echo 'Email error: ' . $mail->ErrorInfo;
} else {
  echo 'Email has been sent.';
}
?>



