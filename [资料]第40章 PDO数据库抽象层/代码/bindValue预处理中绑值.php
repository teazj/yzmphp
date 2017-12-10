<?php 
//pdo预处理类

$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
$pdo->exec('set names utf8');

$sql="select * from user where id=?";

$smt=$pdo->prepare($sql);

$id=28;

// $smt->bindValue(1,$id,PDO::PARAM_INT);
$smt->bindValue(1,$id,PDO::PARAM_STR);

$smt->execute();

$row=$smt->fetch(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($row);
echo '</pre>';
 ?>
