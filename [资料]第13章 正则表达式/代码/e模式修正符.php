<?php 

$str="linux-html5-js";
$ptn='/(\w+)-(\w+)-(\w+)/e';
$rep='strtoupper(substr($1,0,2))."-".strtoupper($2)."-".strtoupper($3)';

echo preg_replace($ptn,$rep,$str);

 ?>


