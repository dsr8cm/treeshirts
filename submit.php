<?php
// $address = '';
// $city = '';
// $state = '';
// $zip = '';
// if(isset($_GET["password"])) {
ini_set('display_errors',0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';
if(isset($_POST['email'])){
$db_connection = pg_connect("host=ec2-174-129-220-12.compute-1.amazonaws.com port=5432 dbname=da92c70sm552i5 user=ssrokyoydqyfei password=a444cf799a4f5fb35284fa8442d4e831b25348ef1ac645da8a48c7449578984c");
$error = '';
$password=$_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$email=$_POST['email'];
$state=$_POST['myList'];
$q = "SELECT * FROM users WHERE email = '$email'";
$r = pg_query($db_connection, $q);
$count = pg_affected_rows($r);
//hi
if ($count>0){
  $error = 'That email is already registered.';
  echo($error);
}
else{
  $query = "INSERT INTO users VALUES ('$_POST[username]', '$email', '$_POST[address]', '$_POST[city]',
    '$state', '$_POST[zip]', '$hashed_password')";
  $result = pg_query($db_connection, $query);
    // print pg_result_error($result);
    // require_once('path/to/PHPMailer/src/Exception.php');
    // require_once('path/to/PHPMailer/src/PHPMailer.php');
    // require_once('path/to/PHPMailer/src/SMTP.php');


    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        header('Location: member-home.html');
        $mail->SMTPDebug = 4;                      // Enable verbose debug output
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
}
// }
?>
