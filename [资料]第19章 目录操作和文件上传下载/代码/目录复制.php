<?php 
$srcdir='home';
$dstdir='admin';

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

copydir($srcdir,$dstdir);
 ?>
