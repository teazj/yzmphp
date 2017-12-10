<?php 
$arr=array(
	'item1'=>'linux',
	'item2'=>'php',
	'item3'=>'js',
	'item4'=>'java',
	'item5'=>'html5',
	'item6'=>'php',
	'item7'=>'php'
);

$rst=array_count_values($arr);
echo '<pre>';
print_r($rst);
echo '</pre>';
 ?>
