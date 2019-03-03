<?php

/* localhost:port/lphp1811e/b2/index.php */

/* vi file chỉ chứa code php nên ko cần đóng thẻ php '?>' */
// Dinh nghia ham trong php
// 1 - Ham su dung cho tat ca cac phien ban php khac nhau (thong dung hay su dung nhat)


function myFunction($a, $b = 10)
{
	// noi dung - logic xu ly se nam o day
	// echo "Hello word";
	return $a+$b;
}

// su dung ham trong php
$result = myFunction(3,6);
echo $result;

// dinh nghia ham php tim BCS cua 5,6 tu 1 - 100;
function timBoiSoChung($a, $b, $n = 1, $m = 100)
{
	$result = '';
	for($i = $n; $i <= $m; $i++){
		if($i % 5 == 0 && $i % 6 == 0){
			// . toan tu noi chuoi trong php
			// .= bang chinh no noi voi 1 gia tri khac
			$result .= empty($result) ? $i : ',' . $i;
		}
	}
	return $result;
}
$kq = timBoiSoChung(5,6);
echo "<br/>";
echo $kq;

// viet ham dinh tinh giai thua cua 1 so bat ky
function tinhGiaiThua($n)
{
	$kq = 1;
	for($i = 1; $i <= $n; $i++){
		$kq *= $i;
	}
	return $kq;
}

$giaiThua = tinhGiaiThua(5);
echo "<br/>";
echo $giaiThua;

// Bien toan tuc - bien cuc bo trong ham php

$number = 100; // bien toan cuc

function checkNumber($a)
{
	// muon su dung bien toan cuc vao trong ham can lam nhu sau
	// su dung keyword global dung truoc bien can dung - lap tuc duoc phep su dung bien toan cuc ngoai ham
	global $number;
	//$GLOBALS['myNumber'] = $number;
	$number2 = 300;
	if($a > $number){
		return false;
	}
	return true;
}
echo "<br/>";
$t = checkNumber(10);
//echo gettype($t);
var_dump($t);
echo "<br/>";

// Bien Tinh (static) trong ham php

function testStatic()
{
	static $count = 0; // bien cuc bo
	// khong the nao tac dong vao no khi ra khoi ham
	$count++;
	echo $count;
}
// luu lai gia tri cua bien cuc bo trong ham sau moi lan goi ham (chung ta co the tac dong nguoc lai bien do o ngoai ham tuy vao logic xu ly o trong ham)

testStatic();
echo "<br/>";
testStatic();
echo "<br/>";
testStatic();

echo "<br/>";
// tham chieu (tham bien) va tham tri trong ham php (tham so trong ham)
// 1 - Tham tri : bien truyen vao ham di ra khoi ham khong bi thay doi gia tri

$thamTri = 10;
function testThamTri($thamTri)
{
	$thamTri -= 5; // $thamTri = $thamTri - 5;
	return $thamTri;
}
echo testThamTri($thamTri);
echo "<br>";
echo $thamTri;

echo "<br>";
// bien truyen vao ham - di ra khoi ham bi thay doi gia tri theo logic xu ly o trong ham
// cu phap: &tenBien
function testThamChieu(&$thamTri)
{
	$thamTri -= 5; // $thamTri = $thamTri - 5;
	return $thamTri;
}
echo testThamChieu($thamTri);
echo "<br>";
echo $thamTri;




