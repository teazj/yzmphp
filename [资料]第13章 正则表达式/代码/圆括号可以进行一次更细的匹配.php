<?php 
// 原子

$str="2017-03-20";
$ptn='/^(\d+)-(\d+)-(\d+)$/';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


