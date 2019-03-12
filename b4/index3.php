<?php 
// nhan du lieu tu index2.php truyen sang bang method GET
$id = $_GET['id'] ?? 0;
// $id = isset($_GET['id']) ? $_GET['id'] : 0
$name = $_GET['name'] ?? 'test';

echo "id la: {$id} - name la : {$name}";

// kiem tra xem nguoi dung bam nut login chua
if(isset($_GET['btnLogin'])){
	$user = $_GET['user'] ?? '';
	$user = trim(strip_tags($user));

	$password = $_GET['pass'] ?? '';
	$password = trim(strip_tags($password));

	if($user === 'admin' && $password === '123'){
		echo "login thanh cong";
	} else {
		echo "login that bai";
	}
}

// kiem tra xem nguoi dung bam nut login chua
if(isset($_POST['btnLogin'])){
	$user = $_POST['user'] ?? '';
	$user = trim(strip_tags($user));

	$password = $_POST['pass'] ?? '';
	$password = trim(strip_tags($password));

	if($user === 'admin' && $password === '123'){
		echo "login thanh cong";
	} else {
		echo "login that bai";
	}
}

