<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>index</title>
	<style>
		textarea{
			width:90%;
			height:100px;
			resize:none;
			padding:10px;
			font-size:20px;
			font-family:微软雅黑;
			font-weight:bold;
		}
	</style>
</head>
<body>
	<form action="list.php" method='post' enctype='multipart/form-data'>
		<p>选择图片:</p>
		<p>
			<input type="file" name="img">
		</p>

		<p>
			<input type="submit" value="提交">
			<input type="reset" value='取消'>
		</p>
	</form>
</body>
</html>
