<?php 
include 'config.php';
include 'Page.class.php';

// 总页数
$sqltot="select count(*) from user";
$smtot=$pdo->prepare($sqltot);
$smtot->execute();
$tot=$smtot->fetchColumn();

$page=new Page($tot,3);

//页面数据
$sql="select * from user limit {$page->offset},{$page->length}";
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
		.nowPage{
			width:34px;
			padding:0px;
			text-align: center;
			display: inline;
		}

		.nowPage input.form-control{
			padding:0px;
			text-align: center;
		}

		.col-md-4{
			padding-right:0px;
			width:360px;
		}

		.col-md-2{
			padding-left:0px;
		}

	</style>
</head>
<body>
	<div class="container">
		<h1 class="page-header">
			用户管理 
			<a href="add.php" class='btn btn-success btn-lg'>添加</a>
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
		<div class="row">
			<div class="col-md-4">
				<a href="index.php?p=1" class='btn btn-primary'>首页</a>
				<a href="index.php?p=<?php echo $page->prevPage ?>" class='btn btn-primary'>上一页</a>
				<a href="index.php?p=<?php echo $page->nextPage ?>" class='btn btn-primary'>下一页</a>
				<a href="index.php?p=<?php echo $page->totPage ?>" class='btn btn-primary'>末页</a>
				<button class='btn btn-default'>总计:<?php echo $page->totPage ?>页</button>
			</div>
			<div class="col-md-2">
				<form action="index.php">
					<input type="text" name='p' class='form-control nowPage' value='<?php echo $page->page ?>'>
					<input type="submit" value="go" class='btn btn-success'>
				</form>
			</div>
		</div>
	</div>
</body>
</html>