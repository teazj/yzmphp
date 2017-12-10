<?php 
$tel="18923614403";

$ptn='/^189\d{8}$/';

$num=preg_match($ptn,$tel);

if($num){
	echo '手机格式正确!';
}else{
	echo '手机格式有误!';
}
 ?>
