<?php 
/*
实例: 隔行换色
*/

for($i=0;$i<5;$i++){
	if($i%2==1){
		echo "<h1 style='background:#888;'>{$i}</h1>";
	}else{
		echo "<h1>{$i}</h1>";
	}
}


 ?>
