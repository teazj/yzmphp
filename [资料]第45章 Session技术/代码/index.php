<?php 
//开启
session_start();

$_SESSION['admin']='123';
$_SESSION['age']=20;
$_SESSION['sex']='nan';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


 ?>