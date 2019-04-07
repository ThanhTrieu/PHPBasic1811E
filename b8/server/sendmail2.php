<?php
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
// su dung cac thu khi duoc require (vi cac thu vien dc viet theo oop php va co namespace nen can dung use)


if(isset($_POST['btnSend'])){
	// lay cac thong tin tu form gui len
	$subject = $_POST['subject'] ?? '';
	$subject = strip_tags($subject);

	$email   = $_POST['email'];
	$email   = strip_tags($email);

	$checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

	$content = $_POST['content'] ?? '';
	// validate form
	if(empty($subject) || empty($content) || !$checkEmail){
		header("Location:../index2.php?state=err");
	} else {
		// thuc thi send mail
		$send = mySendMail($subject, $email, $content);
		if($send){
			header("Location:../index2.php?state=success");
		} else {
			header("Location:../index2.php?state=fail");
		}
	}
}

function mySendMail($subject, $email, $content)
{
	// khoi tao doi tuong phpmailer
	$mail = new PHPMailer(true);
	try {
		//Server settings
	    //$mail->SMTPDebug = 2;                                       
	    // Enable verbose debug output
	    $mail->isSMTP();                                            
	    // Set mailer to use SMTP
	    $mail->Host       = 'smtp.googlemail.com ';  
	    // Specify main and backup SMTP servers
	    $mail->SMTPAuth   = true;                                   
	    // Enable SMTP authentication
	    $mail->Username   = 'trieuntgvt3h@gmail.com';                     
	    // SMTP username
	    $mail->Password   = 'trieunt123';                               
	    // SMTP password
	    $mail->SMTPSecure = 'tls';                                  
	    // Enable TLS encryption, `ssl` also accepted
	    $mail->Port       = 587;                                    
	    // TCP port to connect to
	    
	     //Recipients
	    $mail->setFrom('trieuntgvt3h@gmail.com', 'Demo Mailer PHP');
	    $mail->addAddress($email); // Add a recipient
	    $mail->addCC('nguyenthanhtrieu90@gmail.com');

	    // Attachments
	    $mail->addAttachment('image/test.jpg');// Add attachments
	    $mail->addAttachment('image/test.jpg');// Add attachments

	    // Content
	    $mail->isHTML(true);                                  
	    // Set email format to HTML
	    $mail->Subject = $subject;
	    $mail->Body    = $content;

	    if($mail->send()){
	    	return true;
	    }
	    return false;

	} catch(Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}
