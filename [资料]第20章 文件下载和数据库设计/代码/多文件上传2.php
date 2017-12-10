<?php 
echo '<pre>';
print_r($_FILES);
echo '</pre>';

foreach($_FILES as $file){
	// 文件上传
	$name=$file['name'];
	$ext=array_pop(explode('.',$name));

	$size=$file['size'];
	$tmp_name=$file['tmp_name'];
	$tfile=time().mt_rand().'.'.$ext;

	$target='uploads/'.$tfile;

	if(move_uploaded_file($tmp_name,$target)){
		echo "文件{$name}上传成功!";
	}else{
		echo "文件{$name}上传失败!";
	}
}

 ?>
