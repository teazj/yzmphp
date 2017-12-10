<?php 

$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
$pdo->exec('set names utf8');

$sql="insert into user(username,password) values('user9','999')";

if($pdo->query($sql)){
	echo '数据添加成功!';
}
 ?>
