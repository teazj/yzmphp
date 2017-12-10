<?php 

$a=10;

function show(){
	global $a;
	$a++;
}

show();
echo $a;
 ?>
