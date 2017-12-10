<?php
$mem=new Memcache();

$mem->connect("localhost","50000");

$arr=$mem->getStats();

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>
