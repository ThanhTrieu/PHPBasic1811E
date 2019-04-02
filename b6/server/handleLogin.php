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
			// tao cookie
			$remember = $_POST['remember'] ?? '';
			if($remember === 'on'){
				// xet cookie theo yeu cau cua nguoi dung
				setcookie('account',$user,time()+3600,'/','',0);
			} else {
				// xet cookie mac dinh
				setcookie('account',$user,time()+20,'/','',0);
			}

			// tao ra cac session luu thong tin cua nguoi dung
			$_SESSION['username'] = $user;

			// cho di vao trang home
			header("Location:../home.php");
		} else {
			header("Location:../login.php?state=fail");
		}
	}
}