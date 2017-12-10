<?php 

$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
$pdo->exec('set names utf8');

$sql="delete from user where id>3";

if($num=$pdo->exec($sql)){
	echo "成功删除{$num}行!";
}else{
	echo '删除失败!';
}
 ?>
