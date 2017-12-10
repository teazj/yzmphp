<?php 
$arr=array(0,1,2,3,4,5,6,7,8,9,10);

// 数组遍历
function getval($arr){
	foreach($arr as $val){
		if($val%2==1){
			$row[]=$val;
		}
	}
	return $row;
}

$row=getval($arr);

echo '<pre>';
print_r($row);
echo '</pre>';
 ?>