<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

require_once('path/to/PHPMailer/src/Exception.php');
require_once('path/to/PHPMailer/src/PHPMailer.php');
require_once('path/to/PHPMailer/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = 4;                      // Enable verbose debug output
    $mail->isSMTP();
    $mail->SMTPAuth = true;                                         // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'treeshirts101@gmail.com';                     // SMTP username
    $mail->Password   = 'Treeshirts';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('treeshirts101@gmail.com', 'Treeshirts');
    $mail->addReplyTo('treeshirts101@gmail.com', 'Treeshirts');


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Thank you for signing up!';
    $mail->Body    = 'Welcome!';
    $mail->addAddress($_POST['email']);
    $mail->send();
    echo 'Message has been sent';
  }
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

        }
?>
