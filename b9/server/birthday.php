<?php
if(isset($_POST['btnCheck'])){
	$birthday = $_POST['birthday'] ?? '';
	// Y-m-d

	if($birthday){
		// co nhap ngay thang
		// kiem tra cai ngay thang ma nguoi dung gui len voi ngay thang hien tai
		// lay ra duoc ngay/thang ma nguoi dung gui len khong quan tam den nam
		$arrBirthday = explode('-', $birthday);
		$dayBirthday = $arrBirthday[2]; 
		$monthBirthday = $arrBirthday[1];
		$yearNow = date('Y');
		$strBirthday = $yearNow .'-'.$monthBirthday.'-'.$dayBirthday;
		$timeBirthday = strtotime($strBirthday);
		$timeToday = strtotime(date('Y-m-d'));

		if($timeToday > $timeBirthday)
		{
			header("Location:../index2.php?state=oke&check=pass");
		} 
		elseif ($timeToday == $timeBirthday) 
		{
			header("Location:../index2.php?state=oke&check=success");
		} 
		else 
		 {
			// chua toi ngay sinh nhat
			// tinh ra con bao nhieu ngay nua
			$ranDay = $timeBirthday - $timeToday;
			$day = ceil($ranDay/86400);
			header("Location:../index2.php?state=oke&check={$day}");
		}


	} else {
		// khong nhap
		header("Location:../index2.php?state=fail");
	}
}