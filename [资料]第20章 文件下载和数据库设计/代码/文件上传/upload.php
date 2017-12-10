<?php 
if($_FILES){
	//获取文件上传错误码
	$error=$_FILES['img']['error'];

	if($error==0){
		//只允许上传png或jpg图片文件
		$allow=array('jpg','png','avi');

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
	}elseif($error==1){
		echo '文件上传大小超过20M!';
	}elseif($error==4){
		echo '请你先选择图片!';
	}
}else{
	echo '文件上传大小超过100M!';
}



 ?>