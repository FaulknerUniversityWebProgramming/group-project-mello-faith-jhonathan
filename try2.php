 <?php  


if ($PHP_AUTH_USER != "faithp.king@gmail.com"  

    or $PHP_AUTH_PW != "Perspective22"):  

  // Bad or no username/password.  

  // Send HTTP 401 error to make the  

  // browser prompt the user.  

  header("WWW-Authenticate: " .  

         "Basic realm="Protected Page: " .  

         "Enter your username and password " .  

         "for access."");  

  header("HTTP/1.0 401 Unauthorized");  

  // Display message if user cancels dialog  

  ?>  


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);





// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '/home/codio/workspace/group-project-mello-faith-jhonathan/try2.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'faithp.king@gmail.com';                     // SMTP username
    $mail->Password   = 'Perspective22';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('faithp.king@gmail.com', 'Mailer');
    $mail->addAddress('faithp.king@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('faithp.king@gmail.com');               // Name is optional
    $mail->addReplyTo('faithp.king@gmail.com', 'Information');
  //  $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}