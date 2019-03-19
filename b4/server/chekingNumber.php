<?php
// kiem tra xem nguoi dung bam nut check chua
if(isset($_POST['checkNumber'])){
	// lay number nguoi dung gui len
	$number = $_POST['number'] ?? '';

	if(is_numeric($number)){
		// kiem tra xem no co phai la chuoi so khong ?
		// viet ham kiem tra so nguyen to
		if(myCheckNumber($number)){
			header("Location:../checknumber.php?sate=oke&num={$number}");
		} else {
			header('Location:../checknumber.php?sate=err&num='.$number);
		}
	} else {
		header("Location:../checknumber.php?sate=fail");
	}
}

function myCheckNumber($myNumber)
{
	if($myNumber <= 1){
		return false;
	} elseif($myNumber == 2){
		return true;
	} else {
		$flag = true;
		for ($i = 2 ; $i <= sqrt($myNumber); $i++) {
			if($myNumber % $i == 0){
				$flag = false;
				break;
			}
		}
		return $flag;
	}
}


