<?php 
// 命名空间

namespace home;

function show(){
	echo '<p>111</p>';
}

$func=__NAMESPACE__.'\show';

$func();
?>
