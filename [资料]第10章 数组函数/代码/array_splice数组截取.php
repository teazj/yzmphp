<?php 
$arr=array(
	'item1'=>'linux',
	'item2'=>'java',
	'item3'=>'js',
	'item4'=>'php',
	'item5'=>'shell',
	'item6'=>'python',
	'item7'=>'ruby'
);

$arr2=array_splice($arr,2,3);

echo '<pre>';
print_r($arr2);
echo '</pre>';

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>
