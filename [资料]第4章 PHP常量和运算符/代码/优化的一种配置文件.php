<?php 
$arr=array(
	'HOST'=>'localhost',
	'USER'=>'root',
	'PASS'=>'12345678',
	'DBNAME'=>'yzmedu'
);

foreach($arr as $key=>$val){
	define($key,$val);
}

 ?>
