<?php
session_start();

$idCart = $_GET['id'] ?? '';
$idCart = is_numeric($idCart) ? $idCart : 0;
if(isset($_SESSION['cart'][$idCart])){
	unset($_SESSION['cart'][$idCart]);
}
header("Location:showCart.php");  