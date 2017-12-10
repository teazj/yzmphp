<?php 

$arr=array(
	array('id'=>0,'name'=>'aaaa'),
	array('id'=>0,'name'=>'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
	array('id'=>0,'name'=>'a'),
	array('id'=>0,'name'=>'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
	array('id'=>0,'name'=>'aaaaaaaaaaaaaaaaaaaaa'),
	array('id'=>0,'name'=>'aaaaaaaaaaaa'),
);

foreach($arr as $val){
	$arr2[]=strlen($val['name']);
}

array_multisort($arr2,$arr);

foreach($arr as $key=>$val2){
	$arr[$key]['id']=++$i;
}

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>
