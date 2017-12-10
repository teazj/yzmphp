<?php 
$var1 = 5;
$var2 = 10;

function foo(&$my_var)
{
	global $var1;
	$var1 += 2;
	$var2 = 4;
	$my_var += 3;
	return $var2;
}

$my_var = 5;
echo foo($my_var).'<br>';
echo $my_var.'<br>';
echo $var1.'<br>';
echo $var2.'<br>';
$bar = 'foo';
$my_var = 10;
echo $bar($my_bar);
 ?>
