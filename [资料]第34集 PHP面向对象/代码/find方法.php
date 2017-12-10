<?php 
include 'Model.class.php';
include 'function.inc.php';

$row=M('user')->find(3);

echo '<pre>';
print_r($row);
echo '</pre>';
 ?>
