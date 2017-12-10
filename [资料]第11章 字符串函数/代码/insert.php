<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加留言</title>
	<style>
		form{
			border:1px solid #ccc;
			border-radius:5px;
			padding:15px;
			background: #272822;
			color:#fff;
		}

		form textarea{
			width:98%;
			resize:none;
			height:100px;
			font-size:15px;
			padding:15px;
			font-weight:bold;
			font-family:微软雅黑;
		}

		form input[name=user]{
			padding:15px;
			font-size:15px;
			font-weight:bold;
			font-family:微软雅黑;
		}
	</style>
</head>
<body>
	<h1>添加留言:</h1>	
	<form action="add.php" method='post'>
		<p>用户名:</p>
		<p>
			<input type="text" name='user'>
		</p>

		<p>内容:</p>
		<p>
			<textarea name="content"></textarea>
		</p>

		<input type="submit" value="提交">
		<input type="reset" value="取消">
	</form>
</body>
</html>



