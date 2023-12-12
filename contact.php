<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';

// $mail = new PHPMailer(true);

if(isset($_POST['btn']))
{
    extract($_POST);
    var_dump($message);
    // try {
    //     //Server settings
    //     $mail->isSMTP();                                            //Send using SMTP
    //     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    //     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    //     $mail->Username   = 'calebluvuvamu@gmail.com';                     //SMTP username
    //     $mail->Password   = 'fxwbuikpnsrqxzmc';                               //SMTP password
    //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    //     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //     //Recipients
    //     $mail->setFrom($from);
    //     $mail->addAddress('calebluvuvamu@gmail.com');     //Add a recipient

    //     //Content
    //     $mail->isHTML(true);                                  //Set email format to HTML
    //     $mail->Subject = $sujet;
    //     $mail->Body    = $message;

    //     $mail->send();
    //     echo 'Message has been sent';
    // } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }
}

?>
