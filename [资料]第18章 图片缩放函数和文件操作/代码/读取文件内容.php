<?php 
$file='a.txt';

$size=filesize($file);

$fp=fopen($file,'r');

$str=fread($fp,$size);

echo $str;
 ?>
