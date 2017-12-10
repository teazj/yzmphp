<?php

$mem=new Memcache();

$mem->connect("localhost","50000");

if($mem->delete('name2')){
	echo '删除成功';
}

 ?>
