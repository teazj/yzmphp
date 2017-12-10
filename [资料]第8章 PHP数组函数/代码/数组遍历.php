<?php 
$arr=array(
	'item1'=>'linux',
	'item2'=>'java',
	'item3'=>'php',
	'item4'=>'js'
);


while(list($key,$val)=each($arr)){
	echo "<p>{$key}----{$val}</p>";
}

 ?>

