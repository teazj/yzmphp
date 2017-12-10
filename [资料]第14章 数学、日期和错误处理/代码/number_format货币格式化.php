<?php 
$str='1234567';

function format($str){
	$str2=strrev($str);
	$arr=str_split($str2,3);

	$str3=join(',',$arr);

	return strrev($str3);
}
echo format($str);
 ?>





