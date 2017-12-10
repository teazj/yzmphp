<?php 
// 大图资源
$srcimg=imagecreatefromjpeg('a.jpg');

// 小图资源
$dstimg=imagecreatetruecolor(381,251);

// 把大图缩放到小图上去
imagecopyresampled($dstimg,$srcimg,0,0,200,200,381,251,300,200);

// 5.输出最终图像或保存最终图像
header('content-type: image/png');
imagejpeg($dstimg,'sm_a.png');

// 6.释放画布资源
imagedestroy($img);
 ?>
