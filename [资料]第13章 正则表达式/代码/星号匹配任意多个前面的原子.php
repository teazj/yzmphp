<?php 
// 原子

$str="linux I.S-199_much.";
$ptn='/.*/';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


