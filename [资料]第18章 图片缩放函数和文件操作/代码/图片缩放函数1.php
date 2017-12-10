<?php 

$img="cs.jpg";

function thumb($img,$dstx,$dsty,$pre){
	//得到图片信息
	$arr=getimagesize($img);
	$srcx=$arr[0];
	$srcy=$arr[1];
	$srctype=$arr[2];

	//原图资源
	$srcimg=imagecreatefromjpeg($img);

	//目标资源
	$dstimg=imagecreatetruecolor($dstx,$dsty);

	//图片缩放
	imagecopyresampled($dstimg,$srcimg,0,0,0,0,$dstx,$dsty,$srcx,$srcy);	

	//保存路径
	$dstfile="t_".$img;

	//保存图片
	imagejpeg($dstimg,$dstfile);

	//关闭资源
	imagedestroy($srcimg);
	imagedestroy($dstimg);
}

thumb($img,200,200,'t_');

 ?>
