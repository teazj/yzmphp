<?php 
// 大图资源
$srcimg=imagecreatefromjpeg('small.jpg');

// 小图资源
$dstimg=imagecreatefromjpeg('a.jpg');

// 把大图缩放到小图上去
imagecopy($dstimg,$srcimg,0,0,0,0,100,100);

// 5.输出最终图像或保存最终图像
header('content-type: image/png');
imagejpeg($dstimg,'sm_a.png');

// 6.释放画布资源
imagedestroy($img);
 ?>
