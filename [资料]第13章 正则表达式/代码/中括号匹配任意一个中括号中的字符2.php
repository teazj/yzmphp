<?php 
// 原子

$str="linux is 199 very 120 much";
$ptn='/[0-9]/';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


