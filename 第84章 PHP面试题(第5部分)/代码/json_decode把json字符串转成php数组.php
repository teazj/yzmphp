<?php 

$str='{"username":"user1","password":"123"}';

$obj=json_decode($str,true);

echo '<pre>';
print_r($obj);
echo '</pre>';
 ?>
