<?php 
$tel="17823614403@qq.com";

$ptn='/^\w+@\w+\.\w+$/';

$num=preg_match($ptn,$tel);

if($num){
	echo '邮箱格式正确!';
}else{
	echo '邮箱格式有误!';
}
 ?>
