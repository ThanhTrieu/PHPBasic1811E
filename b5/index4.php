<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo upload File</title>
</head>
<body>
	<form action="server/upload.php" method="POST" enctype="multipart/form-data">
		<label for="file"> moi chon file</label>
		<input type="file" name="file" id="file" >
		<br><br>
		<button type="submit" name="btnUpload"> Upload</button>
	</form>
</body>
</html>