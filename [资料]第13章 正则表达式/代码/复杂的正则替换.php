<?php 
// 原子

$str="2017-03-20";
$ptn='/^(\d+)-(\d+)-(\d+)$/';
$rep='$2/$3/$1';

echo preg_replace($ptn,$rep,$str);
 ?>


