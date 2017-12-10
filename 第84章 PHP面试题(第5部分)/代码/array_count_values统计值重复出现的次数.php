<?php 

$arr=array('A','B','A','C','B','A');

$arr2=array_count_values($arr);

echo '<pre>';
print_r($arr2);
echo '</pre>';

 ?>
