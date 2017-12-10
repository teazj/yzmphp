<?php 

$img="cs.png";

function thumb($img,$dstx,$dsty,$pre){
	//得到图片信息
	$arr=getimagesize($img);
	$srcx=$arr[0];
	$srcy=$arr[1];
	$srctype=$arr[2];

	//图片类型
	switch($srctype){
		case 1:
			$srcimg=imagecreatefromgif($img);
			break;	
		case 2:
			$srcimg=imagecreatefromjpeg($img);
			break;	
		case 3:
			$srcimg=imagecreatefrompng($img);
			break;	
	}

	//原图资源

	//目标资源
	$dstimg=imagecreatetruecolor($dstx,$dsty);

	//图片缩放
	imagecopyresampled($dstimg,$srcimg,0,0,0,0,$dstx,$dsty,$srcx,$srcy);	

	//保存路径
	$dstfile="t_".$img;

	//保存图片
	switch($srctype){
		case 1:
			imagegif($dstimg,$dstfile);
			break;	
		case 2:
			imagejpeg($dstimg,$dstfile);
			break;	
		case 3:
			imagepng($dstimg,$dstfile);
			break;	
	}

	//关闭资源
	imagedestroy($srcimg);
	imagedestroy($dstimg);
}

thumb($img,200,200,'t_');

 ?>
