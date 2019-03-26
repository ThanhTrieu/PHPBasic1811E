<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo weather</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			border: 0;
		}
		.wapper{
			width: 980px;
			margin: 20px auto;
			border: 1px solid #ccc;
			padding: 15px;
		}
		.header{
			width: 100%;
			margin: 10px 0px;
		}
		input[name='city']{
			width: 80%;
			height: 30px;
			border: 1px solid #ccc;
			padding: 3px 5px;
		}
		button[type='button']{
			padding: 8px 15px;
			border: 1px solid #ccc;
		}
		.loading{
			display: none;
			margin-left: 20%;
		}
	</style>
</head>
<body>
	<div class="wapper">
		<div class="header">
			<input type="text" name="city" id="city">
			<button type="button" id="search">Search</button>
		</div>
		<div class="loading">
			<img src="images/loading.gif" alt="">
		</div>
		<div class="content"></div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(function(){
			$('#search').click(function(){
				let city = $('#city').val().trim();
				if(city.length > 0){
					// xu ly ajax o day
					$.ajax({
						url: 'server/appweather.php',
						type: 'POST',
						data: {nameCity: city},
						beforeSend: function(){
							$('.loading').show();
						},
						success: function(data){
							$('.loading').hide();
							$('.content').html(data); 
						}
					});
				}
			});
		});
	</script>



</body>
</html>