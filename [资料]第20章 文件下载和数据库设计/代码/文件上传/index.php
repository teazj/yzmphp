<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件上传:</title>
</head>
<body>
	<h2>修改头像:</h2>
	<hr>
	<form action="upload.php" method='post' enctype='multipart/form-data'>
		<p>选择图片:</p>
		<p>
			<input type="file" name="img">
		</p>

		<p>
			<input type="submit" value="上传">
		</p>
	</form>	
</body>
</html>