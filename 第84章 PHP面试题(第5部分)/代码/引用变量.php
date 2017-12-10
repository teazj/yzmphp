<?php 

$a=10;

$b=&$a;

unset($a);

echo $b;

 ?>
