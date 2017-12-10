<?php 

$str=$_SERVER['HTTP_REFERER'];

$arr=parse_url($str);

$host=$arr['host'];

echo $host;
 ?>