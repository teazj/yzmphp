<?php 
//截取文件名

$str='/web/home/index.php';

$pos=strrpos($str,'/');

echo substr($str,$pos+1);
 ?>
