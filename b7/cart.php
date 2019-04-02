<?php
	require 'database.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Cart - Session</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			border: 0;
		}
		.container{
			width: 980px;
			margin: 10px auto;
			padding: 5px;
		}
		h1{text-align: center;}
		.box{
			width: 25%;
			float: left;
			margin-left: 10px;
			border: 1px solid #ccc;
			padding: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>List product !</h1>
		<?php foreach($data as $key => $item): ?>
		<div class="box">
			<img src="<?= $item['image']; ?>" alt="" width="200" height="200">
			<p><?= $item['name']; ?></p>
			<p><?= $item['price']; ?> usd</p>
			<a href="addCart.php?id=<?= $item['id']; ?>"> <b>add cart</b></a>
		</div>
		<?php endforeach; ?>
	</div>
</body>
</html>