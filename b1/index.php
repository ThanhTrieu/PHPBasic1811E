<?php 
// chi co the mo php
// khong can the dong php
// khi trong file khong chua bat ky ngon ngu nao khac ngoai php

echo "Lop PHP1811E";
// localhost:90/lphp1811e/b1/index.php
// localhost:90/lphp1811e/b1
// 127.0.0.1:90/lphp1811e/b1
// echo : keyword :hien thi "chuoi" du lieu ra ngoai trinh duyet

/************ bien trong php ****************/
// luon luon bat dau bang ki tu $
// theo ngay sau ki tu $ khong duoc phep so
// theo ngay sau ki tu $ khong duoc phep la khoang trang
// Bien khong hop le
//$1asas
//$ a;
//mot so bien hop le
$myName = 'Nguyen Van A';
$a9;
$_myage = 20;// gan gia tri cho bien

echo $myName; // in gia tri cua bien
echo "<br/>";
echo $_myage;

$b = "hello"; // bien don binh thuong
$a = "b";
echo "<br/>";
echo $$a; // tham chieu toi gia tri cua 1 bien khac
// bien trong php se phan biet chu hoa va chu thuong
$money;
$Money;
// 2 bien tren khac nhau hoan toan
$myMoney;

// khai bao hang so trong php
define('MY_ADDRESS', 'Ha Noi');
const MY_AGE = 20;
// khac nhau : trong class OOP thi chi dc dung const khong dung define

// su dung hang so
echo "<br/>";
echo MY_ADDRESS;
echo "<br/>";
echo MY_AGE;

echo "<br/>";
/********** Kieu du lieu trong PHP *************/

// Kieu int
$a = 10;
echo gettype($a);// in ra kieu du lieu cua bien
echo "<br/>";

//kieu boolean
$b = true;
echo gettype($b);
echo "<br/>";

// kieu chuoi
$c = "123";
echo gettype($c);
echo "<br/>";

// kieu so thuc
$d = 3.14;
echo gettype($d);
echo "<br/>";

// kieu null
$e = null;
echo gettype($e);
echo "<br/>";

$num1 = 10;
$num2 = '20';// number string
$num3 = $num1 + $num2;
echo $num3;
echo "<br/>";

/*********** cac ham lam viec voi bien trong php *************************/

$test = 10;
settype($test, 'string'); // chuyen doi kieu du lieu cho bien
echo gettype($test);
echo "<br/>";

$number = 100.98;
//echo intval($number); // in ra phan nguyen
//echo floatval($number); // in so thuc
echo strval($number); // in ra chuoi
echo "<br/>";

//$empty = ''; // bien rong
//$empty = null; // bien rong
//$empty = false; // bien rong
//$empty = 0; // bien rong
$empty = 100; // ko phai bien rong
// kiem tra bien rong hay ko - chi quan tam den gia tri cua bien chu ko quan tam kieu du lieu cua bien
if (empty($empty)) {
	echo "Yes";
} else {
	echo "NO";
}

echo "<br/>";
// kiem tra 1 bien co ton tai hay ko?
$lphp1811e = null;
if(isset($lphp1811e)){
	echo "OK";
} else {
	// vi $lphp1811e chua dc khai bao
	// vi $lphp1811e gan bang null
	// vay bien $lphp1811e ko ton tai
	echo "Fail";
}
echo "<br/>";

$numberString = '100'; // chuoi so
// if(is_int($numberString)){
// 	echo "Y";
// } else {
// 	echo "N";
// }
if(is_numeric($numberString)){
	echo "Y";
} else {
	echo "N";
}
echo "<br/>";
$i = 10;
$j;
if($i== 10){
    $j = ($i++)  -  (++$i)  +  ($i--)  -  (--$i);
}
echo $j;
echo "<br/>";

$i = 10;
$j = 9;
$i = (($i+$j)%2  !=0) ? ( (($i+$j)%2 == 0) ? ($j-$i) : ($i-$j)) : ($i > $j) ? ($i - $j) : ($j-$i); 
echo $i;
echo "<br/>";

$k = $m ?? 10;
// $k = (isset(m)) ? $m : 10
echo $k;
echo "<br/>";

$q = 99;
$p = 100;

$t = $q <=> $p;

// bien ben phai trai nho hon la -1
// bien ben phia trai lon hon la 1
// bang nhau la 0
echo $t;
echo "<br/>";









