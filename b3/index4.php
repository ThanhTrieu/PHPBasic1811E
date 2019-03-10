<?php
// cac ham lam viec voi mang trong php
// cac ham co san
$infoST = [
	'age' => 20,
	'name' => 'NVA',
	'address' => 'Ha noi'
];
$infoST = array_change_key_case($infoST, CASE_UPPER);
// 1 : CASE_UPPER  : viet hoa
// 0 : CASE_LOWER  : viet thuong

// echo "<pre>";
// print_r($infoST);

//////////////////////////////////////
$arrNumber = [1,2,3,1,1,2,3,4,5,6,3,2];
$arrNew = array_count_values($arrNumber);
// echo "<pre>";
// print_r($arrNew);

//////////////////////////////////////
array_push($arrNumber, 100);
// echo "<pre>";
// print_r($arrNumber);
$lastElement = array_pop($arrNumber);

// echo "<pre>";
// print_r($arrNumber);
// echo "<br>";
// echo $lastElement;

array_unshift($arrNumber, $lastElement);
// echo "<pre>";
// print_r($arrNumber);
$firstElement = array_shift($arrNumber);

// echo "<pre>";
// print_r($arrNumber);
// echo "<br>";
// echo $firstElement;
// 
////////////////////////////////////
$arrChunk = array_chunk($arrNumber, 8);
// echo "<pre>";
// print_r($arrChunk);

////////////////////////////////////////
// kiem tra xem co phai la mang ko
if(is_array($arrChunk)){
	echo "Yes";
} else {
	echo "No";
}
echo "<br/>";

$fruit = [
	'tao',
	'man',
	'oi',
	'le'
];
// kiem tra 1 phan tu co nam o trong mang hay ko
if(in_array('oi',$fruit)){
	echo "OK";
} else {
	echo "Fail";
}
echo "<br/>";

// kiem tra 1 gia tri co phai la key nam trong mang hay ko?
$worker = ['name' => 'NVA', 'age' => 40];
if(array_key_exists('age', $worker)){
	echo "Y";
} else {
	echo "N";
}
echo "<br/>";

//////////////////////////////////////////////
$arrNumber2 = [1,2,3,1,1,2,3,4,5,6,3,2];
// loai bo cac gia tri trung nhau nam trong mang
$arrNumber2 = array_unique($arrNumber2);
echo "<pre>";
print_r($arrNumber2);
echo "<br/>";

/////////////////////////////////////////////
// chuyen mang ko tuan tu thanh mang tuan tu
$worker = array_values($worker);
echo "<pre>";
print_r($worker);
echo "<br/>";

//////////////////////////////////////////
// tinh tong cac phan tu nam trong mang
$sum = array_sum($arrNumber2);
echo $sum;
echo "<br/>";
//////////////////////////////////////////
// cat mang
$myNumber = [1,2,3,4,5,6,7,8,9,10];
$childArr = array_slice($myNumber, 4, 3, true);
// true : giu nguyen key tu mang cha truyen xuong
echo "<pre>";
print_r($childArr);

