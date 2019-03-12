<?php
// cac kien thuc xu ly file
// 1 mo file (open file)
$fp = @fopen('database/db.txt', 'r+');
// mo file voi quy tac chi dc doc file
if($fp){
	//echo "mo file thanh cong";
	// doc du lieu o trong file 
	$data = fread($fp, filesize('database/db.txt'));
	//echo $data;
	// ghi file
	// fwrite($fp, 'Hello You');

	// dong file
	fclose($fp);
} else {
	echo "khong the mo file";
}

/****** Cac ham xu ly ve file khac ************/
//1 : kiem tra file co ton tai ko?
if(file_exists('database/db.txt')){
	echo "Yes";
} else {
	echo "No";
}
//2 : kiem tra file co quyen ghi khong
//3 : ghi noi dung vao file ma khong can dung fwrite
if(is_writable('database/db.txt')){
	echo "OK";
	// ghi de noi dung cu bang noi dung moi - khong giu lai noi dung cu
	file_put_contents('database/db.txt', 'Hello PHP');
} else {
	echo "ERR";
}

//4 : doi ten file
//@rename('database/db.txt', 'database/mydb.txt');

if(!is_dir('model')){
	mkdir('model');
}



