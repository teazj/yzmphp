<?php 
// 原子

$str="2017-03-20";
$ptn='/\d+/';
$rep='linux';

$str2=preg_replace($ptn,$rep,$str);

echo $str2;
 ?>


