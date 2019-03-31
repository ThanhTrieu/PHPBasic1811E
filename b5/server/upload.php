<?php 
// dinh nghia hang so : duong dan upload file
define('PATH_UPLOAD', 'upload/image/');

if(isset($_POST['btnUpload'])){
	// kiem tra xem nguoi dung co chon file upload ko
	if(isset($_FILES['file'])){
		// kiem tra xem $_FILES se chua cac thong tin cua file gui len
		$nameFile = $_FILES['file']['name'];
		$tmpFile = $_FILES['file']['tmp_name'];
		$erroFile = $_FILES['file']['error'];
		$typeFile = $_FILES['file']['type'];
		if($erroFile == 0 && $tmpFile){
			// file ko co loi va ton tai file can upload o may nguoi dung
			// kiem tra dinh dang cua file
			if(validateTypeFile($typeFile)){
				// tien hanh upload file
				if(move_uploaded_file($tmpFile, PATH_UPLOAD . $nameFile)){
					// quay ve lai dung form upload -  voi trang thai thanh cong
					header("Location:../index4.php?state=success");
				} else {
					// quay ve lai dung form upload - voi trang thai that bai
					header("Location:../index4.php?state=fail");
				}
			} else {
				// quay ve lai dung form upload - voi trang thai that bai
				header("Location:../index4.php?state=err");
			}
		}
	}
}

function validateTypeFile ($type)
{
	// khai bao 1 mang chua cac type file hop le
	$arrFile = ['image/png','image/jpg','image/jpeg','image/gif'];
	if(in_array($type, $arrFile)){
		return true;
	}
	return false;
} 



