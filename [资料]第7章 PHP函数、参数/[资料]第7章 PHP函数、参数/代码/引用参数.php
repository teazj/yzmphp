<?php 
$a=10;

function show(&$i){
	$i++;
	echo $i.'<br>';
}

show($a);

echo $a;
 ?>
