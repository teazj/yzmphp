<?php 
// 命名空间

include "Think/home/Model.class.php";
use Think\home\Model as M;
$obj=new M();
$obj->show();

include "Think/admin/Model.class.php";
use Think\admin\Model as M2;
$obj=new M2();
$obj->show();
 ?>
