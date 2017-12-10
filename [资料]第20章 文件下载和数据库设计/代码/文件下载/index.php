<?php 
//获取files中的文件

$dir='files';

$files=scandir($dir);
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件下载页面</title>
</head>
<body>
	<h2>文件下载页面:</h2>	
	<hr>
	<?php 
		foreach($files as $file){
			if($file!='.' && $file!='..'){
				$filepath=$dir.'/'.$file;

				echo "<p>{$file} <a href='down.php?filepath={$file}'>下载</a></p>";
			}
		}
	 ?>
</body>
</html>