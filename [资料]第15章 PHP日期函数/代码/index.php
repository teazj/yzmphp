<?php 
//缺年
$year=$_GET['y']?$_GET['y']:date('Y',time());

//缺月
$month=$_GET['m']?$_GET['m']:date('n',time());

//本月总天数
$days=date('t',strtotime("{$year}-{$month}-1"));

//本月1号是周几
$week=date('w',strtotime("{$year}-{$month}-1"));

//真正的第一天
$first=1-$week;

//月数大于12月年+1，月变成1月
if($month>=12){
	//下一年和下一月
	$nextYear=$year+1;
	$nextMonth=1;
}else{
	//下一年和下一月
	$nextYear=$year;
	$nextMonth=$month+1;
}

//月数小于1月份时，则年-1，月变成12月
if($month<=1){
	//下一年和下一月
	$prevYear=$year-1;
	$prevMonth=12;
}else{
	//下一年和下一月
	$prevYear=$year;
	$prevMonth=$month-1;
}
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>万年历</title>
	<style>
		h1,h2{
			text-align: center;
		}

		h1{
			color:#555;
		}

		a{
			color:#99f;
		}

		table{
			margin:0 auto;
			border:2px solid #272822;
			width:1000px;
			border-collapse:collapse;
		}

		td,th{
			border:2px solid #272822;
		}

		th{
			color:#c00;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<h1>万年历-<?php echo $year ?>年<?php echo $month ?>月</h1>
	<table>
		<tr>
			<th>周日</th>
			<th>周一</th>
			<th>周二</th>
			<th>周三</th>
			<th>周四</th>
			<th>周五</th>
			<th>周六</th>
		</tr>	
		<?php 
			for($i=$first;$i<=$days;){
				echo '<tr>';
				for($j=0;$j<7;$j++){
					if($i<=$days && $i>=1){
						echo "<td>{$i}</td>";
					}else{
						echo '<td>&nbsp;</td>';
					}
					$i++;
				}
				echo '</tr>';
			}
		?>
	</table>	
	<h2>
		<a href="index.php?y=<?php echo $prevYear ?>&m=<?php echo $prevMonth ?>">上一月</a> |
		<a href="index.php?y=<?php echo $nextYear ?>&m=<?php echo $nextMonth ?>">下一月</a>
	</h2>
</body>
</html>