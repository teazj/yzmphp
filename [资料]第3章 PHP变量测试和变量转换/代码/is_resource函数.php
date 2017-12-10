<?php 
$a=mysql_connect('localhost','root','12345678');

$b=is_resource($a);

var_dump($b);
?>
