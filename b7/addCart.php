<?php
session_start();

require 'database.php';

$id = $_GET['id'] ?? '';
$id = is_numeric($id) ? $id : 0;

$info = [];
// xu ly lay thong tin chi tiet cua san pham dua id
foreach ($data as $key => $val) {
	if($val['id'] == $id){
		$info = $val;
	}
}

// add san pham vao gio hang
// kiem tra xem gio hang da ton tai chua?
if($info){
	if(isset($_SESSION['cart'])){
		// truong hop san pham da ton tai trong gio hang
		if($_SESSION['cart'][$id]['id'] == $id){
			// da ton tai
			// update lai so luong
			$_SESSION['cart'][$id]['qty'] += 1;
		} else {
			// chua ton tai
			$_SESSION['cart'][$id]['id'] = $id;
			$_SESSION['cart'][$id]['name'] = $info['name'];
			$_SESSION['cart'][$id]['image'] = $info['image'];
			$_SESSION['cart'][$id]['price'] = $info['price'];
			$_SESSION['cart'][$id]['qty'] = 1;
		}
	} else {
		// tao ra gio hang
		$_SESSION['cart'][$id]['id'] = $id;
		$_SESSION['cart'][$id]['name'] = $info['name'];
		$_SESSION['cart'][$id]['image'] = $info['image'];
		$_SESSION['cart'][$id]['price'] = $info['price'];
		$_SESSION['cart'][$id]['qty'] = 1;
	}
}
header("Location:showCart.php");


