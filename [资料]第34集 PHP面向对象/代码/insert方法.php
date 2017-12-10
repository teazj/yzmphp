<?php 
include 'Model.class.php';
include 'function.inc.php';

$arr=array(
	'username'=>'user6',
	'age'=>22
);

if(M('user')->insert($arr)){
	echo '<p>数据添加成功!</p>';
}else{
	echo '<p>请先添加数据!</p>';
}
 ?>
