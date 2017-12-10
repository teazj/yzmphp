<?php 
$str='www.baidu.com';

$ptn='/^(\w+\.)?\w+\.\w+$/';
echo preg_match($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>
