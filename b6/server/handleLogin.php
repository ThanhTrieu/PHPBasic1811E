<?php
session_start();
if(isset($_POST['btnLogin'])){
	$user = $_POST['user'] ?? '';
	$user = trim(strip_tags($user));

	$pass = $_POST['pass'] ?? '';
	$pass = trim(strip_tags($pass));

	if(empty($user) || empty($pass)){
		header("Location:../login.php?state=err");
	} else {
		if($user === 'admin' && $pass === '123'){
			// tao ra cac session luu thong tin cua nguoi dung
			$_SESSION['username'] = $user;
			// cho di vao trang home
			header("Location:../home.php");
		} else {
			header("Location:../login.php?state=fail");
		}
	}
}