<?php 
$str='https://www.yzmedu.com/web/home/index.php?id=10&name=user1&pass=123456';

$arr=parse_url($str);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>
