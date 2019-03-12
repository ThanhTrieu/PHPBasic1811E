<?php
//su dung method GET de truyen tai va nhan du lieu
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo method GET</title>
</head>
<body>
	<a href="index3.php?id=10&name=abc" title="send data"> Send Data</a>
	<br><br>
	<h2>Form - method GET</h2>
	<form action="index3.php" method="GET">
		<label>Username</label>
		<input type="text" name="user">
		<br><br>
		<label>Password</label>
		<input type="password" name="pass">
		<br><br>
		<button type="submit" name="btnLogin">Login</button>
	</form>
	<br><br>
	<h2>Form - method POST</h2>
	<form action="index3.php" method="POST">
		<label>Username</label>
		<input type="text" name="user">
		<br><br>
		<label>Password</label>
		<input type="password" name="pass">
		<br><br>
		<button type="submit" name="btnLogin">Login</button>
	</form>
</body>
</html>