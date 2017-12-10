<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
	<style>
		img{
			cursor: pointer;
		}

		img:hover{
			box-shadow:0 0 3px 3px #888;
		}
	</style>
</head>
<body>
	<h2>用户注册:</h2>	
	<hr>
	<form action="reg.php" method='post'>
		<p>用户名:</p>
		<p>
			<input type="text" value='user1' name='username'>
		</p>

		<p>密码:</p>
		<p>
			<input type="password" value='123' name='password'>
		</p>

		<p>验证码:</p>
		<p>
			<img src="verify.php" onclick="this.src='verify.php?rand='+Math.random()">
		</p>

		<p>输入验证码:</p>
		<p>
			<input type="text" name='fcode'>
		</p>

		<p>
			<input type="submit" value="注册">
		</p>
	</form>
</body>
</html>
