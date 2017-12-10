<?php 

$arr=array(1,3,5,7,9);

// 数组遍历
function getval($arr){
	$tot=1;
	foreach($arr as $key=>$val){
		$tot*=$val;
	}
	return $tot;
}

$row=getval($arr);
echo '<pre>';
print_r($row);
echo '</pre>';
 ?>
