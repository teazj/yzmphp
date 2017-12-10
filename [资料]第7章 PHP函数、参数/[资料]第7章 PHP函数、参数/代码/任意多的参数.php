<?php 

// echo 'hello world!';

function show(){
	$args=func_get_args();

	foreach($args as $val){
		$str.='-'.$val;
	}

	echo $str;
}
show('a','b','c','d','e','f','a','b','e','1','2','c');

 ?>
