<?php 
$str='08/26/2008';

$ptn='/(\d+)\/(\d+)\/(\d+)/';
$rep='$3-$1-$2';
echo preg_replace($ptn,$rep,$str);
 ?>
