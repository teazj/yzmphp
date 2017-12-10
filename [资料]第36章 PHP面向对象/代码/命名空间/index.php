<?php 

include 'Think/home/Model.class.php';

$obj=new Think\home\Model();
$obj->show();

Think\home\say();

echo Think\home\HOST;

echo '<hr>';

include 'Think/admin/Model.class.php';
$obj2=new Think\admin\Model();
$obj2->show();

Think\admin\say();

echo Think\home\HOST;

 ?>