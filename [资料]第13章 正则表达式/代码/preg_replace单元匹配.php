<?php 
// 原子

$str="2017-03-20";
$ptn='/^(\d+)-(\d+)-(\d+)$/';
$rep='$1/$2/$3';

echo preg_replace($ptn,$rep,$str);
 ?>


