<?php 
// 当前年
$year=$_GET['y']?$_GET['y']:date('Y',time());

// 当前月
$month=$_GET['m']?$_GET['m']:date('m',time());

// 当前月天数
$days=date('t',strtotime("{$year}-{$month}-1"));

// 今天是周几
$week=date('w',strtotime("{$year}-{$month}-1"));
$del=1-$week;

//上一月
if($month==1){
	$prevy=$year-1;
	$prevm=12;
}else{
	$prevy=$year;
	$prevm=$month-1;
}

//下一月
if($month==12){
	$nexty=$year+1;
	$nextm=1;
}else{
	$nexty=$year;
	$nextm=$month+1;
}
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>date</title>
	<style>
		*{
			font-family: 微软雅黑;
		}

		h2,h3{
			text-align: center;
		}

		h3 a{
			color:#66f;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<h2>万年历-<?php echo $year ?>年<?php echo $month ?>月</h2>	
	<table border='1px' width='1000px' align='center' cellspacing='0'>
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
			for($i=$del;$i<=$days;){

				echo '<tr>';
				for($j=0;$j<7;$j++,$i++){
					if($i<1 || $i>$days){
						echo '<td>&nbsp;</td>';
					}else{
						echo "<td>{$i}</td>";
					}
				}
				echo '</tr>';
			}
		 ?>	
	</table>
	<h3>
		<a href="?y=<?php echo $prevy ?>&m=<?php echo $prevm ?>">上一月</a> |
		<a href="?y=<?php echo $nexty ?>&m=<?php echo $nextm ?>">下一月</a>
	</h3>
</body>
</html>