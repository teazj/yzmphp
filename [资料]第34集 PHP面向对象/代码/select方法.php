<?php 
include 'Model.class.php';
include 'function.inc.php';

$rows=M('user')->select();

echo '<pre>';
print_r($rows);
echo '</pre>';
 ?>
