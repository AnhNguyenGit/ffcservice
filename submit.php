<?php
	use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;

		// Load Composer's autoloader
		require 'vendor/autoload.php';
?>

<?php

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){


		$mail = new PHPMailer(true);
		$mail->CharSet = "utf-8";
		$mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host = "mail.ffcservicetraining.com"; // specify main and backup server
		
		$mail->SMTPAuth = true; // turn on SMTP authentication
	   // $mail->SMTPAutoTLS = false;
		$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);
		$mail->Username = "noreply@ffcservicetraining.com"; // your SMTP username or your gmail username
		$mail->Password = "1234@Qazx"; // your SMTP password or your gmail password

									  // SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//Recipients
		$mail->setFrom('noreply@ffcservicetraining.com', 'Noreply');
		$mail->addAddress('nclubhanoi@gmail.com', 'FFC Team'); 
		$mail->addReplyTo('noreply@ffcservicetraining.com', 'Noreply');
		
		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $_POST['fullname']." - From SBT Solutions";
		$mail->Body    = "Name: ".$_POST['fullname']."<br>Email: ".$_POST['email'];
		//$mail->AltBody = $_POST['fullname']."\n".$_POST['email']."\n".$_POST['phone']."\n".$_POST['message']."\n";

		if(!$mail->send()) {
			echo '';
		} else {
			echo '';
		}
}
?>