<?php 
$pdo=new PDO('mysql:host=localhost;dbname=test','root','123');
$pdo->exec('set names utf8');
$sql="select * from user";
$smt=$pdo->query($sql);

$rows=$smt->fetchAll(PDO::FETCH_ASSOC);
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	<script src="bs/js/jquery.js"></script>
	<script src="bs/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="page-header">用户管理</h1>
		<table class='table table-striped table-bordered'>
			<tr>
				<th>编号</th>
				<th>用户名</th>
				<th>得分</th>
				<th>删除</th>
			</tr>
			<?php 
				foreach($rows as $row){
					echo "<tr id='id{$row['id']}'>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['username']}</td>";
					echo "<td>{$row['score']}</td>";
					echo "<td><a href='javascript:' class='adel' did='{$row['id']}'>删除</a></td>";
					echo "</tr>";
				}
			 ?>
		</table>
	</div>	
</body>
<script>
$('.adel').click(function(){
	id=$(this).attr('did');
	$.get('del.php',{'id':id},function(r){
		$('#id'+id).hide();
	});
});
</script>
</html>