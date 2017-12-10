<?php 
// 原子

$str="13623614403";
$ptn='/^\d{11}$/';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


