<?php 
// 原子

$str="linux is very much";
$ptn='/./';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


