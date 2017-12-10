<?php 

$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
$pdo->exec('set names utf8');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_BOTH);

$sql="insert into user(username,age) values('user7','777')";
if($pdo->exec($sql)){
	$lastid=$pdo->lastInsertId();
	echo "ID为{$lastid}的数据插入成功!";
}
 ?>
