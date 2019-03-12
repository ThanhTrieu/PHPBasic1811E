<?php
declare(strict_types=1); 
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
echo "<br/>";

/****** Sap xep mang PHP *******/
//1 sap xep dua vao gia tri(value)
$randomArr = [100,1,5,10,11,3,4,9,8,2,7];
//arsort($randomArr);// sap xep giam dan
asort($randomArr); // sap xem tang dan
echo "<pre>";
print_r($randomArr);
echo "<br/>";

//2 sap xep dua vao key nam trong mang
$randomArr2 = [
	'z' => 100,
	'a' => 1,
	'b' => 2,
	'f' => 3,
	'y' => 5
];
//krsort($randomArr2); // giam dan
ksort($randomArr2); // tang dan
echo "<pre>";
print_r($randomArr2);
echo "<br/>";

// khong su dung ham de sap xep
// tu xay dung 1 ham de sap xep mang
$randomArr3 = [100,1,5,10,11,3,4,9,8,2,7];
function sapXepMangPHP($arr)
{
	/*
	foreach($arr as $key => $val){
		foreach($arr as $key2 => $item){
			if($arr[$key] < $arr[$key2]){
				$tmp = $arr[$key];
				$arr[$key] = $arr[$key2];
				$arr[$key2] = $tmp;
			}
		}
	}
	*/
	$count = count($arr); // dem so luong phan tu nam trong mang
	for($i =0; $i<= $count; $i++){
		for($j = $i+1; $j < $count; $j++){
			if($arr[$i] > $arr[$j]){
				$tmp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $tmp;
			}
		}
	}
	return $arr;
}
echo "<pre>";
print_r(sapXepMangPHP($randomArr3));
echo "<br/>";

// tim kiem phan tu nam trong mang ma khong can dung ham co san
// tim kiem tuyen tinh
$randomArr4 = [100,1,5,10,11,3,4,9,8,2,7];
function searchElementInArray(int $a, array $arr): bool
{
	$flag = false;
	foreach ($arr as $key => $value) {
		if($value == $a){
			$flag = true;
			break;
		}
	}
	return $flag;
}
$checking = searchElementInArray(11, $randomArr4);
var_dump($checking);
