<?php 
//pdo预处理类

$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
$pdo->exec('set names utf8');

$sql="insert into user(username,password) values('user11','123')";

$smt=$pdo->prepare($sql);

if($smt->execute()){
	$num=$smt->rowCount();
	echo $num.'行被添加成功!';
}
 ?>
