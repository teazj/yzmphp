<?php 
/*
循环控制
break:结束本层循环.
*/

for($i=0;$i<5;$i++){
	if($i==2){
		continue;	
	}else{
		echo "<h1>{$i}</h1>";
	}

	echo '<p>本次循环即将结束!</p><hr>';
}

 ?>
