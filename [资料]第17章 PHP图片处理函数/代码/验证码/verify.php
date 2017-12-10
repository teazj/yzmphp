<?php 
// session是实现多个页面共享数据的
session_start();

// 1.创建画布资源
$img=imagecreatetruecolor(100,30);

// 2.准备颜色
$white=imagecolorallocate($img,255,255,255);
$blue=imagecolorallocate($img,0,0,255);
$gray=imagecolorallocate($img,200,200,200);

// 3.在画布上画图像或文字
imagefill($img,0,0,$white);

// 随时生成5位字符串
$arr=array_merge(range(0,9),range('a','z'),range('A','Z'));
shuffle($arr);
$randStr=join('',array_slice($arr,0,5));

//把随机字符串放到session数组中
$_SESSION['vcode']=$randStr;

// 4.画点
imagettftext($img,15,0,15,22,$blue,'./msyhbd.ttf',$randStr);

// 点干扰素
for($i=0;$i<500;$i++){
	imagesetpixel($img,mt_rand(0,100),mt_rand(0,30),$blue);
}

// 线干扰素
for($j=0;$j<10;$j++){
	imageline($img,mt_rand(0,100),mt_rand(0,30),mt_rand(0,100),mt_rand(0,30),$blue);
}

// 曲线干扰素
for($x=0;$x<10;$x++){
	imageellipse($img,mt_rand(0,100),mt_rand(0,30),20,20,$blue);
}

// 5.输出最终图像或保存最终图像
header('content-type: image/png');
imagepng($img);

// 6.释放画布资源
imagedestroy($img);
 ?>