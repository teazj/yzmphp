<?php 
// 全局空间
namespace home;

include 'Model.class.php';

function substr(){
	echo '123<br>';
}

$obj=new \Model();
$obj->show();

?>

