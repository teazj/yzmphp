<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件上传</title>
</head>
<body>
	<h3>文件上传:</h3>	
	<hr>
	<form action="up.php" method='post' enctype='multipart/form-data'>
		<p>上传图片</p>
		<p>
			<input type="file" name="img">
		</p>

		<p>
			<input type="submit" value="上传">
		</p>
	</form>	
</body>
</html>