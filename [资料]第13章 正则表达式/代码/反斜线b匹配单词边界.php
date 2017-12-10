<?php 
// 原子

$str="linua and p2p isp3plinuc";
$ptn='/\bp.p\b/';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


