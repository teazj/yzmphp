<?php 
$dir='aaaa';

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

deldir($dir);
 ?>
