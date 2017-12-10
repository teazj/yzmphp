<?php 
$start=microtime(true);

for($i=0;$i<100000000;$i++){
	//1000万代码	
}

$end=microtime(true);

$diff=$end-$start;

echo "php中执行1000万次循环总计用时: {$diff}";
 ?>

