<?php 
function show(){
	static $a=0;
	$a++;
	$func=__FUNCTION__;
	echo "这是第{$a}次调用{$func}函数!<br>";
}

show();
show();
show();
show();
show();
 ?>
