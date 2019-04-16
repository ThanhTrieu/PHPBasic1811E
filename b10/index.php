<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo CURL PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<h1 class="text-center">Xem ti gia ngoai te</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="form-group">
					<label for="currency"> Don vi ngoai te</label>
					<select name="currency" id="currency" class="form-control">
						<option value="USD">USD</option>
						<option value="EUR">EUR</option>
						<option value="JPY">JPY</option>
					</select>
				</div>
				<button id="btnSearch" class="btn btn-primary"> Xem Thong Tin</button>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-12 col-md-12">
				<div id="result"></div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.0.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function(){
			$('#btnSearch').click(function() {
				let money = $('#currency').val().trim();
				if(money){
					$.ajax({
						url: "controller/money.php",
						type: "POST",
						data: {money: money},
						beforeSend: function(){
							$('#btnSearch').text('Loading ...');
						},
						success: function(result){
							$('#btnSearch').text('Xem Thong Tin');
							$('#result').html(result);
						}
					});
				} else {
					alert('Vui long chon don vi tien')
				}
			});
		});
	</script>
</body>
</html>