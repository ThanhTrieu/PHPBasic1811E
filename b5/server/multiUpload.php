<?php 
// dinh nghia hang so : duong dan upload file
define('PATH_UPLOAD', 'upload/image/');

if(isset($_POST['btnUpload'])){
	if(isset($_FILES['file'])){
		// echo "<pre>";
		// print_r($_FILES);
		// die;
		$arrErrorFile = $_FILES['file']['error'];
		$flagUpload = false;
		foreach ($arrErrorFile as $key => $val) {
			if($val == 0){
				// kiem tra cac file ko co loi moi up load
				// lay namefile cua tung file
				$nameFile = $_FILES['file']['name'][$key];
				//$_FILES['file']['name'][0];
				////$_FILES['file']['name'][1];
				$tmpNameFile = $_FILES['file']['tmp_name'][$key];
				if($tmpNameFile){
					if(move_uploaded_file($tmpNameFile, PATH_UPLOAD . $nameFile)){
						$flagUpload = true;
					}
				}
			}
		}
		if($flagUpload){
			header("Location:../index5.php?state=success");
		} else {
			header("Location:../index5.php?state=fail");
		}
	}
}