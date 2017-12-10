<?php 
$arr=array(
	'title1'=>'linux is very much!',
	'title2'=>'php is very much!',
	'title3'=>'java and pap is very much!',
	'title4'=>'html5 is and pxp very much!',
	'title5'=>'javascript and linux is very much!',
	'title6'=>'css3 and js and php and java is very much!'
);

$ptn='/p.p/';

$arr2=preg_grep($ptn,$arr);

echo '<pre>';
print_r($arr2);
echo '</pre>';
 ?>
