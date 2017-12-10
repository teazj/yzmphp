<?php 
$str='13623614403';

$ptn='/^138\d{8}$/';

$num=preg_match($ptn,$str);

echo $num;
 ?>
