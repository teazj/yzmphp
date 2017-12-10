<?php 

$arr=array(
	'item1'=>'linux',
	'item2'=>'php',
	'item3'=>'java',
	'item4'=>'mysql',
	'item5'=>'jquery'
);

// 数组遍历
function getval($str,$arr){
	foreach($arr as $key=>$val){
		if($val==$str){
			return true;
		}
	}
}

$row=getval('js',$arr);
var_dump($row);
 ?>
