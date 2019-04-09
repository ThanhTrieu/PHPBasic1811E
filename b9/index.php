<?php
// xu ly ngay thang php
// lay ra ngay thang hien tai
// thiet lap timezone
// date_default_timezone_set('Asia/Ho_Chi_Minh');

$date = date('Y-m-d H:i:s');
$year = date('Y');
$month = date('m');
$day   = date('d'); 

// so sanh ngay thang trong php
$yesterday = '2019-04-08';
$today = '2019-04-09';
// can chuyen doi ngay thang ve so duoi dang timestamp (giay)
$timeYesterday = strtotime($yesterday);
// lay ra so giay tinh tu 1/1/1970 den ngay can kiem tra
// lay ra so giay tinh tu 1/1/1970 den dung thoi diem hien tai
$time = time();

$timeToday = strtotime($today);
if($timeYesterday < $timeToday){
	echo "OK";
} else {
	echo "Fail";
}

echo "<br/>";

$d = mktime(0,0,0,11,(20+12),2019);
// chuyen doi so giay ra dinh dang ngay thang

echo date('Y-m-d',$d);
echo "<br/>";

$tom = date('Y-m-d',strtotime("-3week"));
echo $tom;










