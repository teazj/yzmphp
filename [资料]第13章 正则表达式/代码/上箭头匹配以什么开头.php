<?php 
// 原子

$str="linua and php is and linub very much linuc";
$ptn='/^linu./';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


