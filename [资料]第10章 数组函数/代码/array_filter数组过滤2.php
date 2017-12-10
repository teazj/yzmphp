<?php 
$arr=array(1,2,3,4,5,6,7,8,9,10);

$rst=array_filter($arr,'odd');

function even($val){
	return $val%2==1;
}

function odd($val){
	return $val%2==0;
}

echo '<pre>';
print_r($rst);
echo '</pre>';
 ?>
