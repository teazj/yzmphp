<?php 
$arr=array('linux','php','java','javascript','html5','css3');

natsort($arr);

$arr2=array_reverse($arr);

echo '<pre>';
print_r($arr2);
echo '</pre>';
 ?>
