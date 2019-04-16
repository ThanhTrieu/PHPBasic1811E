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
echo "<br/>";

// BTCQ kiem tra dinh dang ngay thang : dd/mm/yyyy
$btcq7 = '/^(0[1-9]|1[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/([1-9][0-9]{3})$/';
$myDate = '29/02/2019';
if(preg_match($btcq7, $myDate, $match)){
	//echo "<pre>";
	//print_r($match); // luon luon la 1 mang - array
	if($match){
		// lay ra thang
		$month = (int)$match[2];
		//echo $month;
		//lay ra ngay
		$day = (int)$match[1];
		// lay ra nam
		$year = (int)$match[3];
		if($month === 2){
			// danh rieng cho thang 2 vi co nam nhuan
			if($day >=1 && $day <= 28){
				echo "Ngay thang hop le";
			} elseif($day === 29){
				// kiem tra nam
				if($year % 400 == 0){
					echo "Ngay thang hop le";
				} elseif($year % 4 == 0 && $year % 100 != 0){
					echo "Ngay thang hop le";
				} else {
					echo "Ngay thang khong hop le";
				}
			} else {
				echo "Ngay thang khong hop le";
			}
		}
		// xu ly cho cac thang con lai
	}
} else {
	echo "Fail";
}
echo "<br/>";

// kiem tra 1 so co nam chu so tro len va co it nhat 1 so chan
// ?= : theo sau no phai la 1 luat - quy tac tuong ung nao do
// ?=ab
$btcq8 = '/^(?=.*[2,4,6,8])\d{5,}$/';
$inputNumber  = '17395';
// \d ~~ [0-9]

if(preg_match($btcq8, $inputNumber, $match)){
	echo "<pre>";
	print_r($match); 
} else {
	echo "No";
}
echo "<br/>";

// $btcq9 = '/^(?=.*[A-Z])[a-zA-Z0-9]{5,}$/';
// $btcq9 = '/^(?=.*[A-Z]).{5,}$/';
// [a-zA-Z0-9] ~~ \w
// \D ~~ [a-zA-Z] !\d
// \s - Khoảng trắng (space)
// \S - Ký tự bất kỳ không phải là khoảng trắng.
// . : dai dien cho ki tu bat ky bao gom ca khoang trang

$btcq10 = '/^29-(P1|C1|G1|H1|T1|B1|V[1-9])\s\d\d\.\d{3}$/';
$bsx = '29-B1 12.345';
if(preg_match($btcq10, $bsx, $match)){
	echo "<pre>";
	print_r($match); 
} else {
	echo "No";
}
echo "<br/>";

// viet bieu thuc chinh quy kiem tra do manh yeu cua mat khau
// co 8 ki tu tro len, co it nhat 1 chu hoa, it nhat 1 chu thuong, it nhat 1 con so, co chua ki tu dac biet (@,*,#).

$btcq11 = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@,*,#])[a-zA-Z0-9@*#]{8,}$/';

$pass = '123asdasdaAASASad@#a*sd';
if(preg_match($btcq11, $pass, $match)){
	echo "<pre>";
	print_r($match); 
} else {
	echo "No";
}
