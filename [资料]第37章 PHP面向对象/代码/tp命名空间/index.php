<?php 
// 命名空间

namespace a;

include "Think/home/Model.class.php";
$obj=new \Think\home\Model();
$obj->show();


namespace b;
include "Think/admin/Model.class.php";
$obj=new \Think\admin\Model();
$obj->show();

 ?>