
  
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require '/home/codio/workspace/libphp-mailerphp/class.phpmailer.php';
require '/home/codio/workspace/libphp-mailerphp/class.smtp.php';
//require '/home/codio/workspace/group-project-mello-faith-jhonathan/try2.php';

$mail = new PHPMailer;
$mail->setFrom('faithp.king@gmail.com');
$mail->addAddress('faithp.king@gmail.com');
$mail->Subject = 'Message sent by PHPMailer';
$mail->Body = 'Hello! use PHPMailer to send email using PHP';
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;

//Set your existing gmail address as user name
$mail->Username = <a href="mailto:'faithp.king@gmail.com">'testerbd18@gmail.com</a>';

//Set the password of your gmail address here
$mail->Password = 'Perspective22';
if(!$mail->send()) {
  echo 'Email is not sent.';
  echo 'Email error: ' . $mail->ErrorInfo;
} else {
  echo 'Email has been sent.';
}
?>



