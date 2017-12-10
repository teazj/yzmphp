<?php 

$str='1234567890';

$str2=strrev($str);

$arr=str_split($str2,3);

echo strrev(join(',',$arr));
 ?>

