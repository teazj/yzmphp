<?php 

$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
$pdo->exec('set names utf8');

$sql="update user set password='999'";

if($num=$pdo->exec($sql)){
	echo "成功修改了{$num}行!";
}else{
	echo '修改失败!';
}
 ?>
