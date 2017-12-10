<?php 

$str="a\nb";

$ptn='/./s';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


