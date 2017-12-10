<?php 
$arr=array(
	'title1'=>'linux',
	'title2'=>'linux is very much，and i love small ma',
	'title3'=>'php is very much',
	'title4'=>'js'
);

foreach($arr as $val){
	$row[]=strlen($val);
}

array_multisort($row,SORT_DESC,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>
