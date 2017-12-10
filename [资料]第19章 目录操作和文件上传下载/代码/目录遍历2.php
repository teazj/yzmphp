<?php 
$dir='home';

$rd=opendir($dir);

while($file=readdir($rd)){
	if($file!='.' && $file!='..'){
		echo $file;
		echo '<br>';
	}
}

 ?>
