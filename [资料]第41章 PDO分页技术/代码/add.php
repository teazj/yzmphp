<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户添加</title>
	<link rel="stylesheet" href="bs/css/bootstrap.css">
	<script src='bs/js/jquery.js'></script>
	<script src='bs/js/bootstrap.js'></script>
</head>
<body>
	<div class="container">
		<h1 class="page-header">
			用户管理 
		</h1>
		<form action="insert.php" method='post'>
			<div class="form-group">
				<label>用户名:</label>	
				<input type="text" class="form-control" name='username' placeholder='用户名'>
			</div>	
			<div class="form-group">
				<label>密码:</label>	
				<input type="text" class="form-control" name='password' placeholder='密码'>
			</div>
			<div class="form-group">
				<input type="submit" value="添加" class='btn btn-primary btn-lg'>
			</div>
		</form>
	</div>	
</body>
</html>