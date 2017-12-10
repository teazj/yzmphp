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
	<form action="list.php" method='post'>
		<p>请留言:</p>	
		<p>
			<textarea name="mess"></textarea>	
		</p>

		<p>
			<input type="submit" value="提交">
			<input type="reset" value='取消'>
		</p>
	</form>
</body>
</html>
