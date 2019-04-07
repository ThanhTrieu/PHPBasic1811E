<?php
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
		header("Location:../index.php?state=err");
	} else {
		// thuc thi send mail
		$send = mySendMail($subject, $email, $content);
		if($send){
			header("Location:../index.php?state=success");
		} else {
			header("Location:../index.php?state=fail");
		}
	}
}

function mySendMail($subject, $email, $content)
{
	// $header = "From:abc@somedomain.com \r\n"; 
	$header = "Cc:nguyenthanhtrieu90@gmail.com \r\n"; 
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	$send = mail($email, $subject, $content, $header);
	if($send){
		return true;
	}
	return false;
}
