<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Show cart</title>
</head>
<body>
	<h1>Infomation Cart</h1>

	<a href="cart.php"> Buy product</a>

	<a href="deleteCart.php">Delete Cart</a>

	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Image</th>
				<th>QTY</th>
				<th>Price</th>
				<th>Money</th>
				<th colspan="2" width="10%">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($cart as $key => $item): ?>
				<tr>
					<td><?= $item['id']; ?></td>
					<td><?= $item['name']; ?></td>
					<td>
						<img src="<?= $item['image'] ?>" width="200" height="200">
					</td>
					<td>
						<input id="qty_<?= $item['id']; ?>" type="number" value="<?= $item['qty']; ?>">
					</td>
					<td>
						<?= number_format($item['price']) ?>
					</td>
					<td id="m_<?= $item['id'];?>">
						<?= number_format($item['qty']*$item['price']); ?>
					</td>
					<td>
						<a href="removeCart.php?id=<?= $item['id']; ?>">remove</a>
					</td>
					<td>
						<button id="<?= $item['id']; ?>" class="update">Update</button>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<script type="text/javascript">
		$(function(){
			$('.update').click(function(){
				let idCart =$.trim($(this).attr('id'));
				let qty = $.trim($('#qty_'+idCart).val());
				let self = $(this);

				if($.isNumeric(idCart)){
					$.ajax({
						url: "updateCart.php",
						type: "POST",
						data: {id: idCart, qty: qty},
						beforeSend: function(){
							self.text('Loading ...');
						},
						success: function(result){
							self.text('Update');
							
							result = $.trim(result);
							if(result === 'FAIL'){
								alert('can not update');
							} else {
								// tai vi ben phia server tra ve 1 chuoi json php chinh la object trong js thi can su dung parseJSON
								let obj = $.parseJSON(result);
								$('#qty_'+idCart).val(obj.qty);
								$('#m_'+idCart).text(obj.money);
							}
						}
					});
				}
			});
		}); 
	</script>
</body>
</html>