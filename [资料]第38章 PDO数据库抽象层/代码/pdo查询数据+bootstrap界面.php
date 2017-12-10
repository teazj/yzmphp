<?php 
$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
$pdo->exec('set names utf8');
$sql="select * from user";

$smt=$pdo->query($sql);
$rows=$smt->fetchAll(PDO::FETCH_ASSOC);

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
		<h1 class='page-header'>查看用户:</h1>
		<table class='table table-striped table-hover table-bordered'>
			<tr>
				<th>编号</th>
				<th>用户名</th>
				<th>年龄</th>
			</tr>
			<?php
				foreach($rows as $row){
					echo '<tr>';
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['username']}</td>";
					echo "<td>{$row['age']}</td>";
					echo '</tr>';
				}
			?>	
		</table>
	</div>	
</body>
</html>

