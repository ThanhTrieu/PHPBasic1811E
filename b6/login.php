<?php
	session_start();
	require 'checkLogined.php';
	redirectToHome();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>demo session - cookie</title>
</head>
<body>
	<h1>Login</h1>
	<form action="server/handleLogin.php" method="POST">
		<label for="user">User</label>
		<input type="text" name="user" id="user">
		<br><br>
		<label for="pass">password</label>
		<input type="password" name="pass" id="pass">
		<br><br>
		<label for="remember">Remember me</label>
		<input type="checkbox" name="remember" id="remember">
		<br><br>
		<button type="submit" name="btnLogin">Login</button>
	</form>
</body>
</html>