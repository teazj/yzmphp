<?php 
$arr=array('linux','php');

$arr2=array('java','mysql');

// 数组遍历
function getval($arr,$arr2){
	for($i=0;$i<2;$i++){
		$row[$arr[$i]]=$arr2[$i];
	}
	return $row;
}

$row=getval($arr,$arr2);

echo '<pre>';
print_r($row);
echo '</pre>';
 ?>
