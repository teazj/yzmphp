<?php 
// 原子

$str="1 2 3 4 5 a b";
$ptn='/[^1-5]/';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


