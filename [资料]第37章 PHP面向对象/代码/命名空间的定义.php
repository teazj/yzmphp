<?php 
// 命名空间

namespace home;
function show(){
	echo '<p>111</p>';
}
\admin\show();

namespace admin;
function show(){
	echo '<p>222</p>';
}
\home\show();
 ?>
