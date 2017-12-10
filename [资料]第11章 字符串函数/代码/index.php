<?php 
mysql_connect('localhost','root','12345678');
mysql_query('set names utf8');
mysql_select_db('yzmedu');

$sql="select * from mess";
$rst=mysql_query($sql);
while($row=mysql_fetch_assoc($rst)){
	$rows[]=$row;
}
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>查看留言</title>

	<style>
		.mess{
			border:1px solid #ccc;
			border-radius:5px;
			padding:15px;
			background: #272822;			
			color:#fff;
			margin-bottom:15px;
		}

		.mess h2{
			border-bottom:1px dashed #ccc;
		}
	</style>
</head>
<body>
	<h1>查看留言:</h1>	
	<?php 
	foreach($rows as $row){
	?>
		<div class="mess">
			<h2><?php echo $row['user'] ?>:</h2>
			<p><?php echo htmlspecialchars_decode($row['content']) ?></p>
		</div>
	<?php
	}
	 ?>
</body>
</html>



