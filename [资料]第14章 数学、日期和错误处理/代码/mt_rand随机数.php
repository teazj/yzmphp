<?php 
$arr=array('a.png','b.png','c.png','d.png','e.png');

$key=mt_rand(0,count($arr)-1);

echo "<img src='img/{$arr[$key]}'>";

 ?>

