<?php
$mem=new Memcache();

$mem->connect("localhost","50000");

if($mem->flush()){
	echo '清空成功';
}

 ?>
