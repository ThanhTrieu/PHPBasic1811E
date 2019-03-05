<?php
/* localhost:port/lphp1811e/b2/index3.php */

// hoc ve chuoi(string) trong php
$myString = 'chung ta dang hoc PHP';
$myString2 = "Hom nay la chu nhat";

// toan tu noi chuoi trong php la dau .
 echo $myString2 . $myString;
 // khi trong chuoi khong chua bien thi nen dung nhay don
 // khi trong chuoi co chua bien thi dung nhay kep
 
echo "<br/>";
$number = 10;
$string3 = '$number la so chan'; // $number : ko phai la bien
echo $string3;

echo "<br/>";
$string4 = "{$number} la so chan"; // $number la bien 
echo $string4;

echo "<br/>";
// long nhay don vao nhay don
echo 'Chung ta dang hoc \'PHP\' buoi 2 ';

echo "<br/>";
// long nhay kep vao nhay kep
echo "Chung ta dang hoc \"PHP\" buoi 2 ";

echo "<br/>";
echo "Chung ta dang hoc 'PHP' buoi 2 ";

echo "<br/>";
echo 'Chung ta dang hoc "PHP" buoi 2 ';
echo "<br/>";


/*********** Cac ham xu ly ve chuoi trong PHP (cac ham co san) ****/
$fruit = 'tao, man, oi, le, dua';
$arrFriut = explode(',', $fruit); // chuyen chuoi thanh mang
print_r($arrFriut);
//var_dump($arrFriut)

echo "<br/>";
$strFriut = implode('-', $arrFriut); // chuyen mang ve chuoi
echo $strFriut;

echo "<br/>";
$string5 = 'Sap duoc tan hoc roi';
echo strlen($string5); // dem so ki tu nam trong chuoi
echo "<br/>";
$string6 = 'Tao đói quá mày ơi';
echo strlen($string6);
echo "<br/>";

echo mb_strlen($string6);
echo "<br/>";
echo str_word_count($string6); // dem so tu trong chuoi

echo "<br/>";
echo str_repeat($string6, 3); // lap lai chuoi

echo "<br/>";
echo str_replace('PHP', 'JS', $myString);

echo "<br/>";
$password = '123456789';
echo md5($password); // ma hoa chuoi - khong quan tam dau vao cua chuoi dai hay ngan ma luon luon ma hoa ve 32 ki tu - ham ma hoa 1 chieu( chua co thuat toan giai ma)
echo "<br/>";
$password2 = '123';
echo md5($password2);
echo "<br/>";

/****** Tiep cac ham lam viec voi chuoi ************/

$myScript = "<script>alert('Hello you')</script>";
//echo $myScript;
echo "<br/>";
$myTitle = '<h1><i>lphp1811e</i></h1>';
echo $myTitle;
echo "<br/>";

$myScript = htmlentities($myScript);
echo $myScript;
echo "<br/>";
$myTitle = htmlentities($myTitle);
echo $myTitle;
echo "<br/>";

echo html_entity_decode($myTitle);
echo "<br/>";

$mySapo = "<h1><u>This is tag HTML</u></h1>";
echo strip_tags($mySapo,'<u>');
echo "<br/>";

$myString7 = 'PHP la ngon ngu server side';
$subString = substr($myString7, 7, 8);
echo $subString;
echo "<br/>";

$myString8 = 'khong giong php, js chuyen xu ly ben phia client side';
$subString2 = strstr($myString8, 'js');
echo $subString2;
echo "<br/>";

$pos = strpos($myString8, 'php');
if($pos !== false){
	echo $pos;
} else {
	echo "khong ton tai trong chuoi";
}
echo "<br/>";

$myString8 = "$luong cua dev moi ra truong tam khoang 300$";
// xoa bo di ki tu dau va cuoi chuoi truyen vao
// truong hop khong truyen gi thi no se hieu la xoa khoang trang
echo trim($myString8);
echo "<br/>";
//echo rtrim($myString8,'$');
echo ltrim($myString8,'$');












