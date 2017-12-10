<?php 
$dir='home';

$files=scandir($dir);

foreach($files as $file){
	if($file!='.' && $file!='..'){
		$type=filetype($dir.'/'.$file);
		echo "<p>{$type} {$file}</p>";
	}
}
 ?>
