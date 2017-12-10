<?php 
// 原子

$str="linux IS-199_much";
$ptn='/\W/';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


