<?php
require 'src/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.ffcservicetraining.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply@ffcservicetraining.com';                 // SMTP username
    $mail->Password = '1234@Qazx';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('noreply@ffcservicetraining.com', 'Noreply - FFCServiceTraining.com');
    $mail->addAddress('noreply@ffcservicetraining.com', 'Noreply');     // Add a recipient
   // $mail->addAddress('ellen@example.com');               // Name is optional
   // $mail->addReplyTo('noreply@ffcservicetraining.com', 'Noreply');
    //$mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');
 
    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Member submit form';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
?>