<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>demo method GET/POST php</title>
</head>
<body>
	<?php
		$mess = $_GET['sate'] ?? '';
		$number = $_GET['num'] ?? ''; 
	?>
	<form action="server/chekingNumber.php" method="POST">
		<label for="number"> Moi nhap so</label>
		<input type="text" name="number" id="number" value="<?= $number; ?>">
		<br><br>
		<button type="submit" name="checkNumber"> Check </button>
	</form>

	<?php if($mess === 'fail'): ?>
		<h3>Vui long nhap du lieu va phai la so</h3>
	<?php endif; ?>

	<?php if($mess === 'oke'): ?>
		<h3><?= $number; ?> la so nguyen to</h3>
	<?php endif; ?>

	<?php if($mess === 'err'): ?>
		<h3><?= $number; ?> khong la so nguyen to</h3>
	<?php endif; ?>

</body>
</html>