<?php 

$arr=array(
	'item1'=>'linux',
	'item2'=>'php'
);

$arr2=array(
	'item3'=>'java',
	'item4'=>'mysql',
	'item5'=>'jquery'
);

// 数组遍历
function getval($arr,$arr2){
	foreach($arr as $key=>$val){
		$row[$key]=$val;
	}

	foreach($arr2 as $key2=>$val2){
		$row[$key2]=$val2;
	}
	return $row;
}

$row=getval($arr,$arr2);

echo '<pre>';
print_r($row);
echo '</pre>';
 ?>
