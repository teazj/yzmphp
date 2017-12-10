<?php 
$arr=array('hello','world');

// $arr[0]='hello123';
$b=&$arr[0];

$b='hello456';

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>