<?php 
include 'Model.class.php';
include 'function.inc.php';

$arr=array(
	'id'=>8,
	'username'=>'user55',
	'age'=>55
);

if(M('user')->update($arr)){
	echo '<p>数据修改成功!</p>';
}else{
	echo '<p>数据修改失败!</p>';
}
 ?>