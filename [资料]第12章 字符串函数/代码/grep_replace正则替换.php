<?php 
$str="2017-03-17";

$ptn='/(\d+)-(\d+)-(\d+)/';
$rep='$2/$3/$1';

$str2=preg_replace($ptn,$rep,$str);

echo $str2;
 ?>
