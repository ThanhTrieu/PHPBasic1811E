<?php 
// dinh nghia hang so : duong dan upload file
define('PATH_UPLOAD', 'upload/image/');

if(isset($_POST['btnUpload'])){
	// kiem tra xem nguoi dung co chon file upload ko
	if(isset($_FILES['file'])){
		// echo "<pre>";
		// print_r($_FILES);
		// die;
		// kiem tra xem $_FILES se chua cac thong tin cua file gui len
		$nameFile = $_FILES['file']['name'];
		$tmpFile = $_FILES['file']['tmp_name'];
		$erroFile = $_FILES['file']['error'];
		$typeFile = $_FILES['file']['type'];
		$sizeFile = $_FILES['file']['size'];
		if($erroFile == 0 && $tmpFile){
			// file ko co loi va ton tai file can upload o may nguoi dung
			// kiem tra dinh dang cua file
			if(validateTypeFile($typeFile) && validateSizeFile($sizeFile)){
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
function validateSizeFile($size)
{
	// $size : byte b
	// can tinh nho hon 5M
	$oneMegabyte = 1024*1024;
	if($size/$oneMegabyte < 5){
		return true;
	}
	return false;
}



