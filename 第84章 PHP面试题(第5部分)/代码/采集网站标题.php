<?php 

$str=file_get_contents('http://www.yzmedu.com');

$ptn='/<title>(.+)<\/title>/';

preg_match($ptn,$str,$arr);

echo $arr[1];
 ?>

