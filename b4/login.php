<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Login Form</h2>
	<form action="server/login.php" method="POST">
		<label>User</label>
		<input type="text" name="user">
		<br><br>
		<label>password</label>
		<input type="password" name="pass">
		<br><br>
		<button type="submit" name="btnLogin">Login</button>
	</form>
</body>
</html>