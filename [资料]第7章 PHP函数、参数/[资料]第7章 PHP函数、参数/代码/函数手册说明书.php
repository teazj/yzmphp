<?php 
/**
函数手册:
int show(int $i[,int $j]);
*/
$a=10;
$b=20;

function show($i,$j=2){
	return $i+$j;
}

echo show($a);
 ?>
