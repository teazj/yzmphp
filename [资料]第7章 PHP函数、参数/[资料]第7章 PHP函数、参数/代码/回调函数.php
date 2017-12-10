<?php 

function show($i,$j,$c){
	return $c($i,$j);
}

echo show(10,20,'sum');

function sum($a,$b){
	return $a+$b;
}

 ?>
