<?php 
// 命名空间

namespace Think\home;
function show(){
	echo '<p>111</p>';
}
\Think\admin\show();

namespace Think\admin;
function show(){
	echo '<p>222</p>';
}
\Think\home\show();
 ?>
