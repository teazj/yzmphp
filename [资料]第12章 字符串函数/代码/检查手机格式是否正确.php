<?php 
$tel="13623614403";

$ptn='/^\d{11}$/';

$num=preg_match($ptn,$tel);

if($num){
	echo '手机格式正确!';
}else{
	echo '手机格式有误!';
}
 ?>
