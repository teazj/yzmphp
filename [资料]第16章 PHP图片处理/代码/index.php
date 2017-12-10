<?php 
// 1.创建画布资源
$img=imagecreatetruecolor(500,300);

// 2.准备颜色
$white=imagecolorallocate($img,255,255,255);
$black=imagecolorallocate($img,0,0,0);
$red=imagecolorallocate($img,255,0,0);
$green=imagecolorallocate($img,0,255,0);
$blue=imagecolorallocate($img,0,0,255);
$gray=imagecolorallocate($img,200,200,200);
$yellow=imagecolorallocate($img,255,255,0);

// 3.在画布上画图像或文字
imagefill($img,0,0,$white);

// 随时生成5位字符串
$arr=array_merge(range(0,9),range('a','z'),range('A','Z'));
shuffle($arr);
$randStr=join('',array_slice($arr,0,5));

// 4.画点
imagettftext($img,90,mt_rand(-30,30),50,200,$blue,'./msyhbd.ttf',$randStr);

// 5.输出最终图像或保存最终图像
header('content-type: image/png');
imagepng($img);

// 6.释放画布资源
imagedestroy($img);
 ?>