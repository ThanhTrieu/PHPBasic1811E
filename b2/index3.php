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




