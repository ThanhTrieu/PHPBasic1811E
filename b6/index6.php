<?php
session_start();
// xoa toan bo session trong ung dung
// session_destroy();
// xoa 1 session
if(isset($_SESSION['age'])){
	unset($_SESSION['age']);
}
header("Location:index5.php");