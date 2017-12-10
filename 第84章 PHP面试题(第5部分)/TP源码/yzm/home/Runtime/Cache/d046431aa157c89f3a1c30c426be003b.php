<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<table width='1000px' border='1px' cellspacing='0'>
		<tr>
			<th>编号</th>
			<th>用户名</th>
			<th>班级</th>
			<th>得分</th>
		</tr>
		<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($row['id']); ?></td>
				<td><?php echo ($row['username']); ?></td>
				<td><?php echo ($row['class_id']); ?></td>
				<td><?php echo ($row['score']); ?></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
</body>
</html>