<?php 
//过滤每个目录下前两个目录
function fdir($rd){
	readdir($rd);
	readdir($rd);
}

$dir='home';

$rd=opendir($dir);

fdir($rd);

while($file=readdir($rd)){
	echo $file;
	echo '<br>';
}

 ?>
