<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo cookie</title>
</head>
<body>
	<?php
		// nhan cookie tu file index.php tao ra
		$myCookie = $_COOKIE['lphp1811'] ?? '';
	?>
	<h1> Cookie : <?= $myCookie; ?></h1>
	<a href="index.php"> back index.php</a>
	<br>
	<a href="index3.php">go to index3.php</a>
</body>
</html>