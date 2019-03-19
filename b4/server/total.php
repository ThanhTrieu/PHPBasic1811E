<?php
// lay du lieu tu phia client gui len
$number1 = $_POST['num1'] ?? '';
$number2 = $_POST['num2'] ?? '';

if(is_numeric($number1) && is_numeric($number2)){
	$total = $number1 + $number2;
	// tra ket qua ve cho phia client
	echo $total;
} else {
	// tra ket qua ve cho phia client
	echo "err";
}