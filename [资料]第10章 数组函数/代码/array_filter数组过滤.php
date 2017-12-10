<?php 
$arr=array(0,'linux',123,'hello',false,array(),'0');

$rst=array_filter($arr);

echo '<pre>';
print_r($rst);
echo '</pre>';
 ?>
