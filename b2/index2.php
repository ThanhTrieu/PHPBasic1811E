<?php
declare(strict_types=1);  // giup thong bao loi khi code theo cu phap cua php 7 tro len (dat tren dau file)

/* localhost:port/lphp1811e/b2/index2.php */

// dinh nghia ham theo phien ban php 7 tro len
// cac cu phap nay thi tu phien ban php 5 tro xuong khong su dung dc
// rang buoc kieu du lieu cua bien truyen vao ham

function kiemTraChanLe(int $a = 20)
{
	if($a % 2 == 0){
		return true;
	}
	return false;
} 

$check = kiemTraChanLe(10);
var_dump($check);
echo "<br/>";

// rang kieu du lieu ma return cua ham tra ve
// trong ham bat buoc phai co reuturn
function checkNumber(int $a) : int 
{
	if($a > 100){
		return 1;
	}
	return 0;
}

$test = checkNumber(99);
var_dump($test);
echo "<br/>";

// viet ham theo chuan php 7 kiem tra so nguyen to
function kiemTraSoNguyenTo(int $a) : bool 
{

}
// viet ham theo chuan php 7 giai ptb2
function giaiPTB2(int $a, int $b, int $c) : string 
{
	
}








