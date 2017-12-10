<?php 
$str='linux-and+php,and.Linux';

$ptn='/-|\+|,|\./';
$arr=preg_split($ptn,$str);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>
