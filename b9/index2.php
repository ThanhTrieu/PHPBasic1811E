<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Time PHP</title>
</head>
<body>
	<?php 
		$state = $_GET['state'] ?? '';
		$mess  = $_GET['check'] ?? '';
	?>
	<div class="container">
		<h1>Kiem tra ngay sinh nhat</h1>

		<?php if($state === 'fail'): ?>
			<h3>Vui long nhap ngay thang sinh nhat</h3>
		<?php endif; ?>

		<?php if($mess === 'pass'): ?>
			<h3>Da qua sinh nhat cua ban roi</h3>
		<?php endif; ?>

		<?php if($mess === 'success'): ?>
			<h3>Chuc mung sinh nhat ban</h3>
		<?php endif; ?>

		<?php if(is_numeric($mess)): ?>
			<h3>Con <?= $mess; ?> ngay nua toi sinh nhat ban</h3>
		<?php endif; ?>


		<form action="server/birthday.php" method="POST">
			<label for="birthday">Moi nhap ngay sinh nhat</label>
			<input type="date" name="birthday" id="birthday">
			<br><br>
			<button type="submit" name="btnCheck"> Kiem Tra</button>
		</form>
	</div>
</body>
</html>