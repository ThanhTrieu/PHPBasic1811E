<?php 

if(isset($_REQUEST['btnLogin'])){
	// lay dc user va password
	$user = $_REQUEST['user'] ?? '';
	// $user = isset($_POST['user']) ? $_POST['user'] : '';
	$user = trim(strip_tags($user));

	$pass = $_REQUEST['pass'] ?? '';
	$pass = trim(strip_tags($pass));

	if(empty($user) || empty($pass)){
		header('Location:../login.php?sate=fail');
	} else {
		// doc du lieu tu file database.txt
		// mo file
		$fp = fopen('database.txt', 'r');
		if($fp){
			$data = fread($fp, filesize('database.txt'));
			// xu ly login theo chuoi
			$input = $user.'/'.$pass;
			if(strpos($data, $input) !== false){
				// login success
				header('Location:../home.php');
			} else {
				// login fail
				header('Location:../login.php?sate=err2');
			}
		} else {
			// can not connect db
			header('Location:../login.php?sate=err');
		}
	}
}