<?php 
include 'Model.class.php';
include 'function.inc.php';

if(M('user')->delete(4)){
	echo '<p>数据删除成功!</p>';
}else{
	echo '<p>禁止删除整表数据!</p>';
}
 ?>
