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
imagefill($img,0,0,$blue);

// 4.在画面上图一个黄色的圆
imagefilledellipse($img,250,150,200,200,$yellow);

// 5.输出最终图像或保存最终图像
header('content-type: image/jpeg');
imagejpeg($img);

// 6.释放画布资源
imagedestroy($img);
 ?>
