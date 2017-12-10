<?php 
$str='/web/name/index.php';

$pos=strrpos($str,'/');

echo substr($str,$pos+1);
 ?>
