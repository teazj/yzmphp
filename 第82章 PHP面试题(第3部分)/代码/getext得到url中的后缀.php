<?php 
$str='http://www.lampym.com/web/index.asp?id=10&name=user1';

function getext($str){
	$arr=parse_url($str);
	$arr2=pathinfo($arr['path']);
	return $arr2['extension'];
}

echo getext($str);
 ?>
