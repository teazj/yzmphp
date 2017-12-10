<?php 

$str="pcx";
$ptn='/.*/U';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


