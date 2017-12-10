<?php 
$arr=array(
	'item1',
	'item2',
	'item3'
);

$arr2=array(
	'linux',
	'php',
	'java'
);

$arr3=array_merge($arr,$arr2);

echo '<pre>';
print_r($arr3);
echo '</pre>';

 ?>
