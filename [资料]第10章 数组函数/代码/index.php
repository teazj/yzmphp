<?php 
$arr=array_merge(range(0,9),range('a','z'),range('A','Z'));

shuffle($arr);

$arr2=array_slice($arr,0,5);

$str=join('',$arr2);

echo $str;
 ?>