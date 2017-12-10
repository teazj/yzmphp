<?php 
$srcdir='admin';
$dstdir='c:/admin';

//复制目录
function copydir($srcdir,$dstdir){
	if(!file_exists($dstdir)){
		mkdir($dstdir);
	}

	$files=scandir($srcdir);
	foreach($files as $file){
		if($file!='.' && $file!='..'){
			$srcpath=$srcdir.'/'.$file;
			$dstpath=$dstdir.'/'.$file;

			if(is_dir($srcpath)){
				copydir($srcpath,$dstpath);
			}else{
				copy($srcpath,$dstpath);
			}
		}
	}
}


//删除目录
function deldir($dir){
	$files=scandir($dir);
	foreach($files as $file){
		if($file!='.' && $file!='..'){
			$path=$dir.'/'.$file;

			if(is_dir($path)){
				deldir($path);
			}else{
				unlink($path);
			}
		}
	}
	rmdir($dir);
}


copydir($srcdir,$dstdir);
deldir($srcdir);
 ?>
