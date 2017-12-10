<?php 

$str="lincx and php and LINbX and Linax";
$ptn='/lin.x/i';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


