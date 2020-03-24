<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (defined('ROOT')) {
	require ROOT . 'packages/vendor/autoload.php';
}


class SMTP2
{
	public static function SendMail($email, $head, $subject, $message)
	{

		//Create a new PHPMailer instance
		$mail = new PHPMailer;

		//Tell PHPMailer to use SMTP
		$mail->isSMTP();

		//Enable SMTP debugging
		// SMTP::DEBUG_OFF = off (for production use)
		// SMTP::DEBUG_CLIENT = client messages
		// SMTP::DEBUG_SERVER = client and server messages
		$mail->SMTPDebug = SMTP::DEBUG_OFF;

		//Set the hostname of the mail server
		$mail->Host = 'smtp.gmail.com';
		// use
		// $mail->Host = gethostbyname('smtp.gmail.com');
		// if your network does not support SMTP over IPv6

		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;

		//Set the encryption mechanism to use - STARTTLS or SMTPS
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;

		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = 'noreply.deathspaces@gmail.com';

		//Password to use for SMTP authentication
		$mail->Password = 'Asd123456!';

		//Set who the message is to be sent from
		$mail->setFrom('noreply.deathspaces@gmail.com', 'DeathSpaces');

		//Set an alternative reply-to address
		$mail->addReplyTo('noreply.deathspaces@gmail.com', 'DeathSpaces');

		//Set who the message is to be sent to
		$mail->addAddress($email, 'DeathSpace '.$head);

		//Set the subject line
		$mail->Subject = $subject;

		//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
		$mail->isHTML(true);

		$mail->Body =  $message;

		//Attach an image file
		//$mail->addAttachment('images/phpmailer_mini.png');

		//send the message, check for errors
		$mail->send();
		
		
	}
}
