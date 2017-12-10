<?php 

$str="id=20&name=user2&age=19";

parse_str($str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';

 ?>
