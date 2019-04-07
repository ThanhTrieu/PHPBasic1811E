<?php 
session_start();

$idCart = $_POST['id'] ?? '';
$idCart = is_numeric($idCart) ? $idCart : 0;

$qty = $_POST['qty'] ?? '';
$qty = is_numeric($qty) ? $qty : 1;

if(isset($_SESSION['cart'])){

	if(isset($_SESSION['cart'][$idCart])){
		$_SESSION['cart'][$idCart]['qty'] = $qty;
		$money = $qty * $_SESSION['cart'][$idCart]['price'];
		// json_encode :  bien mang ve chuoi Json - object trong js
		echo json_encode(['qty' => $qty,'money' => $money]);
	} else {
		echo "FAIL";
	}
} else {
	echo "FAIL";
}