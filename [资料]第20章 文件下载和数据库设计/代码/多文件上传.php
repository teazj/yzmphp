<?php 
echo '<pre>';
print_r($_FILES);
echo '</pre>';

$tot=count($_FILES['img']['name']);

for($i=0;$i<$tot;$i++){
	// 文件上传
	$name=$_FILES['img']['name'][$i];
	$ext=array_pop(explode('.',$name));

	$size=$_FILES['img']['size'][$i];
	$tmp_name=$_FILES['img']['tmp_name'][$i];
	$tfile=time().mt_rand().'.'.$ext;

	$target='uploads/'.$tfile;

	if(move_uploaded_file($tmp_name,$target)){
		echo "文件{$name}上传成功!";
	}else{
		echo "文件{$name}上传失败!";
	}
}

 ?>
