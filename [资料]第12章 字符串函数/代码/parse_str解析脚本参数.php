<?php 
$str='https://www.yzmedu.com/web/home/index.php?id=10&name=user1&pass=123456';

$arr=parse_url($str);

$query=$arr['query'];

parse_str($query,$arr2);

echo '<pre>';
print_r($arr2);
echo '</pre>';
 ?>
