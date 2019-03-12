<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register</title>
</head>
<body>
	<h2> Register Form </h2>
	<form action="server/handle.php" method="POST">
		<label>User</label>
		<input type="text" name="user">
		<br><br>
		<label>password</label>
		<input type="password" name="pass">
		<br><br>
		<label>Email</label>
		<input type="email" name="email">
		<br><br>
		<button type="submit" name="btnRegister">Register</button>
	</form>
</body>
</html>