<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo multi-upload</title>
</head>
<body>
	<h1>Multi-upload</h1>
	<form action="server/multiUpload.php" method="POST" enctype="multipart/form-data">
		<label for="file"> moi chon file</label>
		<input type="file" name="file[]" id="file" multiple>
		<br><br>
		<button type="submit" name="btnUpload"> Upload</button>
	</form>
</body>
</html>