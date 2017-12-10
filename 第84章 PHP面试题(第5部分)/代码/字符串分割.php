<?php 

$str='open_door_linux_php';

$arr=explode('_',$str);

foreach($arr as $val){
	$str2.=ucfirst($val);
}

echo $str2;
 ?>
