<?php 
$query=$_SERVER['QUERY_STRING'];

parse_str($query,$arr2);

echo '<pre>';
print_r($arr2);
echo '</pre>';
 ?>
