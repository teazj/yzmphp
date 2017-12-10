<?php 

$data=array('a','b','c');

foreach($data as $key=>$val){
	$val=&$data[$key];

	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

 ?>

//第二次遍历:
$data[0]='a';

$val=&$data[0];

$val='b';

$data=['b','b','c']

//第三次遍历:
$data[1]='b';

$val=&$data[1];

$val='c';

$data=['b','c','c'];




