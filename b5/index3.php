<?php
// de phong truong hop trinh duyet khong doc hieu cac phong chu tieng viet hay cac phong chu khac khi ma khong co cac ma html ho tro
header('Content-Type: text/html; charset=utf-8');

echo "Hôm nay có đá bóng VN - TL";
echo "<br/>";

// dieu huong trang
//header('Location:../b4/weather.php');
//header('Location:https://www.facebook.com');

$url = "https://facebook.com";
// kiem tra xem 1 bien co phai dung dinh danh url ko?
if(filter_var($url, FILTER_VALIDATE_URL)){
	echo "OK";
} else {
	echo "Fail";
}
echo "<br/>";

$email = "test@gmail.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "Yes";
} else {
	echo "ERR";
}
echo "<br/>";

// kiem tra xem co phai boolean
$check = true;
if(filter_var($check, FILTER_VALIDATE_BOOLEAN)){
	echo "Dung";
} else {
	echo "Sai";
}
 /////// Loc - xoa du lieu khong hop le //////////////

$errEmail = 'côngtyabc@gmail.com';
$newEmail = filter_var($errEmail, FILTER_SANITIZE_EMAIL);
echo "<br/>";
echo $newEmail;
echo "<br/>";

$errUrl = "https://facebook$&^!@*(fsfs)Ế Ố.com";
$newUrl = filter_var($errUrl, FILTER_SANITIZE_URL);
echo $newUrl;

echo "<br/>";
$numberString = "abc123";
$number = filter_var($numberString,FILTER_SANITIZE_NUMBER_INT);
echo $number;









