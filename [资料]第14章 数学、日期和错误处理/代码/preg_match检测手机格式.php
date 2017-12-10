<?php 
$str='13823614403';

$ptn='/^138\d{8}$/';
preg_match($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>
