<?php 
// dinh nghia hang so : duong dan upload file
define('PATH_UPLOAD', 'upload/image/');

if(isset($_POST['btnUpload'])){
	// kiem tra xem nguoi dung co chon file upload ko
	if(isset($_FILES['file'])){
		// kiem tra xem $_FILES se chua cac thong tin cua file gui len
		// echo "<pre>";
		// print_r($_FILES);
		$nameFile = $_FILES['file']['name'];
		$tmpFile = $_FILES['file']['tmp_name'];
		$erroFile = $_FILES['file']['error'];
		if($erroFile == 0 && $tmpFile){
			// file ko co loi va ton tai file can upload o may nguoi dung
			// tien hanh upload file
			if(move_uploaded_file($tmpFile, PATH_UPLOAD . $nameFile)){
				// quay ve lai dung form upload -  voi trang thai thanh cong
				header("Location:../index4.php?state=success");
			} else {
				// quay ve lai dung form upload - voi trang thai that bai
				header("Location:../index4.php?state=fail");
			}
			
		}
	}
}