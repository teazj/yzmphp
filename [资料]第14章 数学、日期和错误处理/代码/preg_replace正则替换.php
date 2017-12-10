<?php 
$str='linux and php and Linux';

$ptn='/linux/i';
$rep='LINUX';

echo preg_replace($ptn,$rep,$str);
 ?>
