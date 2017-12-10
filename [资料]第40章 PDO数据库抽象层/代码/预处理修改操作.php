<?php 
//pdo预处理类

$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
$pdo->exec('set names utf8');

$sql="update user set password='abc' where id=25";

$smt=$pdo->prepare($sql);

if($smt->execute()){
	$num=$smt->rowCount();
	echo $num.'行被添加成功!';
}
 ?>
