<?php 
function checkLogin()
{
	// se giup kiem tra xem nguoi dung da dang nhap chua
	$acc = $_SESSION['username'] ?? '';
	$cookie = $_COOKIE['account'] ?? '';

	if($acc && $cookie){
		return true;
	}
	return false;
}

function redirectToLogin()
{
	if(!checkLogin()) {
		header("Location:login.php");
		die(); // dung chuong trinh
	}
}

function redirectToHome()
{
	if(checkLogin()) {
		header("Location:home.php");
	}
}

