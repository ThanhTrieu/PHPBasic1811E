<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>demo Ajax - php</title>
</head>
<body>
	<form>
		<label for="nb1">number 1 : </label>
		<input type="text" name="nb1" id="nb1">

		<label for="nb2">number 2 : </label>
		<input type="text" name="nb2" id="nb2">

		<label for="result"> = </label>
		<span id="result"></span>
		<br><br>
		<button type="button" id="btnSum"> Sum </button>
	</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#btnSum').click(function(){
				let number1 = $('#nb1').val().trim();
				let number2 = $('#nb2').val().trim();
				//alert(number1 + number2);
				 // $ == jQuery
				if($.isNumeric(number1) && $.isNumeric(number2)){
					// viet ajax gui du lieu len serve
					$.ajax({
						url: 'server/total.php',
						type: 'POST',
						data: {num1: number1, num2: number2},
						beforeSend: function(){
							$('#btnSum').text('Loading ...');
						}, 
						success: function(result){
							// noi nhan ket qua ben server backend tra ve
							$('#btnSum').text('Sum');
							result = $.trim(result);
							if(result === 'err'){
								alert('co loi xay ra');
							} else {
								$('#result').text(result);
							}
						}
					});
				} else {
					alert('vui long nhap so');
				}
			});
		});
	</script>

</body>
</html>