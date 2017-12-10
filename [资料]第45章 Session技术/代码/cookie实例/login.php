<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录</title>
	<link rel="stylesheet" href="bs/css/bootstrap.css">
	<script src="bs/js/jquery.js"></script>
	<script src="bs/js/bootstrap.js"></script>
	<style>
		.login{
			width:500px;
			height:300px;
			background: #272822;
			position: absolute;
			top:50%;
			left:50%;			
			margin-left:-250px;
			margin-top:-150px;
			border-radius:100px 10px;
			color:#fff;
		}

		form{
			width:300px;
			margin:0 auto;
			margin-top:60px;
		}
	</style>
</head>
<body>
	<div class="login">
		<form action="check.php" method='post'>
			<div class="form-group">
				<label>用户名:</label>
				<input type="text" class="form-control" name='username'>
			</div>

			<div class="form-group">
				<label>密码:</label>
				<input type="text" class="form-control" name='password'>
			</div>

			<div class="form-group">
				<input type="submit" value="登录" class='btn btn-warning'>
				<input type="reset" value="取消" class='btn btn-info'>
			</div>
		</form>
	</div>	
</body>
</html>