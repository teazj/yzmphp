<?php 
//连接memcache服务器
$mem=new Memcache();
$mem->connect("localhost","50000");

if(!$rows=$mem->get('rows')){
	// 缓存中无rows，需要从mysql中重新获取新数据
	// 数据库数据
	$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
	$pdo->exec('set names utf8');
	$sql="select * from user";
	$smt=$pdo->prepare($sql);
	$smt->execute();
	$rows=$smt->fetchAll(PDO::FETCH_ASSOC);

	// 把rows存入memcache缓存
	$mem->set('rows',$rows);

	//来自数据库
	$s=1;
}else{
	//来自缓存
	$s=0;
}
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>查看用户</title>
	<link rel="stylesheet" href="bs/css/bootstrap.css">
	<script src='bs/js/jquery.js'></script>
	<script src='bs/js/bootstrap.js'></script>
</head>
<body>
	<div class="container">
		<h1 class="page-header">查看用户:</h1>
		<table class='table table-striped table-bordered table-hover'>
			<tr>
				<th>编号</th>
				<th>用户名</th>
				<th>密码</th>
			</tr>
			
			<?php 
				foreach($rows as $row){
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['username']}</td>";
					echo "<td>{$row['password']}</td>";
					echo "</tr>";
				}
				
			 ?>
		</table>

		<?php 
			if($s){
		?>
			<div class="alert alert-danger">
				<p>页面数据全部来自Mysql数据库!</p>
			</div>
		<?php
			}else{
		?>
			<div class="alert alert-success">
				<p>页面数据全部来自Memcache缓存!</p>
			</div>
		<?php
			}
		 ?>
		
	</div>	
</body>
</html>
