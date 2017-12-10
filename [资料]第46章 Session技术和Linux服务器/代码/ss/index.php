<?php 
session_start();

$admin_username=$_SESSION['admin_username'];

if(!$admin_username){
	echo "<script>location='login.php'</script>";
	exit;
}
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网站后台</title>
	<link rel="stylesheet" href="bs/css/bootstrap.css">
	<script src="bs/js/jquery.js"></script>
	<script src="bs/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="page-header">云知梦网站后台:</h1>

		<div class="jumbotron">
			<h1>www.yzmedu.com</h1>
			<h2>云知梦，只为有梦想的人!</h2>
			<h2>400-105-8680</h2>
			<p>
				<button class='btn btn-primary btn-lg'>
					<?php echo $admin_username ?>
				</button>
				<a href='logout.php' class='btn btn-success btn-lg'>退出</a>
			</p>
		</div>

		<div class="alert alert-info">
			<p>欢迎 <b><?php echo $admin_username ?></b> 登录云知梦网站后台!</p>
		</div>
	</div>	
</body>
</html>