<?php 
include 'config.php';

$sql="select * from user";
$smt=$pdo->prepare($sql);
$smt->execute();
$rows=$smt->fetchAll(PDO::FETCH_ASSOC);
 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户模块</title>
	<link rel="stylesheet" href="bs/css/bootstrap.css">
	<script src='bs/js/jquery.js'></script>
	<script src='bs/js/bootstrap.js'></script>
	<style>
		td,th{
			text-align: center;
			vertical-align:middle!important;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="page-header">
			用户管理 

		</h1>

		<table class='table table-striped table-hover table-bordered'>
			<tr>
				<th>编号</th>
				<th>用户名</th>
				<th>密码</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php 
				foreach($rows as $row){
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['username']}</td>";
					echo "<td>{$row['password']}</td>";
					echo "<td><a href='edit.php?id={$row['id']}' class='btn btn-warning'>修改</a></td>";
					echo "<td><a href='delete.php?id={$row['id']}' class='btn btn-danger'>删除</a></td>";
					echo "</tr>";
				}
			 ?>
		</table>
		<p>
			<a href="add.php" class='btn btn-primary btn-lg'>添加</a>
		</p>
	</div>
</body>
</html>