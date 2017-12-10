<?php 
// 原子

$str="linux is very much";
$ptn='/[0-9]/';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


