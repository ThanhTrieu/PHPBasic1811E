<?php
session_start();
$user = $_SESSION['username'] ?? '';
$age  = $_SESSION['age'] ?? 0;
//echo "my name : {$user} - my age : {$age}";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>demo session</title>
</head>
<body>
	<h2> my name <?= $user; ?></h2>
	<h2>my age <?= $age; ?></h2>
	<a href="index6.php"> delete session</a>
</body>
</html>