<?php 
// 命名空间

include "Think/home/Model.class.php";
use Think\home\Model;
$obj=new Model();
$obj->show();


include "Think/admin/Model.class.php";
use Think\admin\Model as Model2;
$obj=new Model2();
$obj->show();
 ?>
