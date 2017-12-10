<?php 
$dir='home';

$files=scandir($dir);

foreach($files as $file){
	if($file!='.' && $file!='..'){
		echo $file;
		echo '<br>';
	}
}
 ?>
