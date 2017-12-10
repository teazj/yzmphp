<?php 

$str="linux is very much!\nLINUX is very much!";

$ptn='/^linux/im';

preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>


