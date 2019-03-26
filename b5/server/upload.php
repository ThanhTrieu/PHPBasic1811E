<?php 
if(isset($_POST['btnUpload'])){
	// kiem tra xem nguoi dung co chon file upload ko
	if(isset($_FILES['file'])){
		// kiem tra xem $_FILES se chua cac thong tin cua file gui len
		echo "<pre>";
		print_r($_FILES);
	}
}