<?php 
// 原子

$str="linux IS 199 very 120 much";
$ptn='/[A-Z]/';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


