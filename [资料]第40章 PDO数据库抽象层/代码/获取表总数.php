<?php 
//pdo预处理类

$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
$pdo->exec('set names utf8');

$sql="select count(*) from user";

$smt=$pdo->prepare($sql);

$smt->execute();

$row=$smt->fetch(PDO::FETCH_NUM);

$tot=$row[0];

echo $tot;
 ?>
