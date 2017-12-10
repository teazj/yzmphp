<?php 
//开启session才可以取出其他页面放到session数组中的数据
session_start();

//获取表单中人们输入的验证码
$fcode=strtolower($_POST['fcode']);

//获取图片中的随机字符串
$vcode=strtolower($_SESSION['vcode']);

//把人们输入的验证码和图片中的随机字符串都变成小写，然后进行比对.

if($fcode==$vcode){
	echo "<h2>{$_POST['username']}注册成功!</h2>";
}else{
	echo "<h2>验证码输入有误!</h2>";
}

echo "<script>setTimeout(function(){location='index.php'},1000)</script>";
 ?>