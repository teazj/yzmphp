<?php 

$path='http://www.baidu.com';

$str=file_get_contents($path);

file_put_contents('index.html',$str);
 ?>
