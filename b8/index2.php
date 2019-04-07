<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo send mail PHP</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			border: 0;
		}
		.container{
			width: 980px;
			margin: 20px auto;
		}
		form{
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 3px;
		}
		h1{
			text-align: center;
			margin: 5px 0px;
		}
		.form-group{
			width: 100%;
			display: block;
			margin: 10px 0px;
		}
		.form-control{
			width: 100%;
			height: 35px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		.form-control-area{
			width: 100%;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		button{
			padding: 12px 20px;
			border: 1px solid #ccc;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Send mail PHP</h1>
		<form action="server/sendmail2.php" method="POST">
			<div class="form-group">
				<label for="subject">Subject</label>
				<input class="form-control" type="text" name="subject" id="subject">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="email" name="email" id="email">
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<textarea class="form-control-area" name="content" id="content" rows="10"></textarea>
			</div>
			<button type="submit" name="btnSend">Send</button>
		</form>
	</div>
</body>
</html>