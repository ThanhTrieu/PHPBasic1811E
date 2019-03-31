<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo cookie</title>
</head>
<body>
	<!-- xoa cookie -->
	<?php setcookie('lphp1811','',time()-3600,'/','',0); ?>
	<a href="index2.php"> back to index2.php</a>
</body>
</html>