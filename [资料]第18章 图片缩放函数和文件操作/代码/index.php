<?php 
$sfile='http://www.yzmedu.com';

$str=file_get_contents($sfile);

$img='/<img src="(.+)" title="云知梦" alt="云知梦">/i';
preg_match($img,$str,$arr0);

$title='/<title>(.+)<\/title>/';
preg_match($title,$str,$arr);

$ptn='/<meta name="description" content="(.+)">/i';
preg_match($ptn,$str,$arr2);


$put.='<h1>该网站的logo是:</h1>';
$put.="<p><img src='http://www.yzmedu.com{$arr0[1]}'></p>";
$put.='<hr>';
$put.='<h1>采集网站的标题是:</h1>';
$put.="<p>{$arr[1]}</p>";
$put.='<hr>';
$put.='<h1>采集网站的描述是:</h1>';
$put.="<p>{$arr2[1]}</p>";

$dfile="yzmedu.html";
file_put_contents($dfile,$put);
 ?>