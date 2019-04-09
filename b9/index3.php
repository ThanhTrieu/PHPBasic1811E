<?php
// bieu thuc chinh quy trong php
$string = 'abc abc';
$btcq = '/^abc abc$/';
// kiem tra xem trong chuoi $string  ki tu co dung dau ko
if(preg_match($btcq, $string)){
	echo "OK";
} else {
	echo "ERR";
}
echo "<br/>";

$number = 12; // ab
// btcq kiem tra 1 so la so va co 2 chu so
$btcq2 = '/^[1-9]{1}[0-9]{1}$/';
if(preg_match($btcq2,$number)){
	echo "Y";
} else {
	echo "N";
}
echo "<br/>";

$btcq3 = '/^[1-9][0-9][0-9][0-9][0,5]$/';
$input = 12345;
if(preg_match($btcq3,$input)){
	echo "Yes";
} else {
	echo "No";
} 
echo "<br/>";
$btcq4 = '/^[1,3,5,7,9][^1,3,5,7,9][0,5][0-9]$/';
$inputNumber = 122;

$btcq5 = '/^[1-9][1,3,5,7,9]$|^[1-9][0-9][0,2,4,6,8]$/';



// viet btcq kiem tra so dien thoai co 10 chu so cua nha mang VT
$btcq6 = '/^[0](3[2-9]|9[6-8]|8[6])[0-9]{7}$/';
$phone = '0985091304';
if(preg_match($btcq6, $phone)){
	echo "Dung";
} else {
	echo "Sai";
}
// BTCQ kiem tra dinh dang ngay thang
$btcq7 = '/^(0[1-9]|1[0-9]|2[0-9]|3[0-1])\/()\/()$/';



