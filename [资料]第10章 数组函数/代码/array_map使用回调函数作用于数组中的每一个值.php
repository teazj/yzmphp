<?php 
$arr=array(1,2,3,4,5,6,7,8,9,10);

$rst=array_map('mod',$arr);

function mod($val){
	return $val*$val*$val;
}

echo '<pre>';
print_r($rst);
echo '</pre>';
 ?>
