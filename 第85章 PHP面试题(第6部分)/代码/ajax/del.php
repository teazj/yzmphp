<?php 

$id=$_GET['id'];

$pdo=new PDO('mysql:host=localhost;dbname=test','root','123');
$pdo->exec('set names utf8');
$sql="delete from user where id={$id}";
if($pdo->exec($sql)){
	echo 1;
}

 ?>