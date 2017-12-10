<?php
$mem=new Memcache();

$mem->connect("localhost","50000");

if($mem->set('age2','500')){
	echo '修改成功';
}

 ?>
