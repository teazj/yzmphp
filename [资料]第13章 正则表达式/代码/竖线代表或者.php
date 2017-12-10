<?php 
// 原子

$str="linux and php is and linux very much";
$ptn='/linux|php|and/';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


