<?php 
$str='linux is very much and php';

preg_match_all('/linux|php/',$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>
