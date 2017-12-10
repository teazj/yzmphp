<?php 
//连接memcache服务器
$mem=new Memcache();
$mem->connect("localhost","50000");

//清空缓存
if($mem->flush()){
	echo "<script>location='index.php'</script>";
}

 ?>
