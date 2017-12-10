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

// 4.画点

// for($i=0;$i<100;$i++){
// 	imageellipse($img,mt_rand(0,500),mt_rand(0,300),mt_rand(0,300),mt_rand(0,300),$black);
// }

imagefilledarc($img,250,150,200,200,0,70,$blue,IMG_ARC_PIE);
imagefilledarc($img,250,150,200,200,70,160,$red,IMG_ARC_PIE);
imagefilledarc($img,250,150,200,200,160,230,$yellow,IMG_ARC_PIE);
imagefilledarc($img,250,150,200,200,230,360,$green,IMG_ARC_PIE);


// 5.输出最终图像或保存最终图像
header('content-type: image/png');
imagepng($img);

// 6.释放画布资源
imagedestroy($img);
 ?>
