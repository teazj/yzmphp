<?php 

$arr=array(
	'item1'=>'linux',
	'item2'=>'php',
	'item3'=>'java',
	'item4'=>'mysql',
	'item5'=>'jquery'
);

// 数组遍历
function getval($arr){
	foreach($arr as $key=>$val){
		$row[]=$val;
	}

	return $row;
}

$row=getval($arr);
echo '<pre>';
print_r($row);
echo '</pre>';
 ?>
