<?php 
//只允许上传png或jpg图片文件
$allow=array('jpg','png');

//只允许上传500KB以内的图片
$allowsize=500*1024;

$name=$_FILES['img']['name'];
$ext=array_pop(explode('.',$name));

$size=$_FILES['img']['size'];
$tmp_name=$_FILES['img']['tmp_name'];
$tfile=time().mt_rand().'.'.$ext;

$target='uploads/'.$tfile;

if($size<$allowsize){
	if(in_array($ext,$allow)){
		if(move_uploaded_file($tmp_name,$target)){
			echo "文件{$name}上传成功!";
		}
	}else{
		echo '只允许上传jpg|png文件图片!';
	}
}else{
	echo '只允许上传500KB以内的图片!';
}


 ?>