<?php 
//pdo预处理类

$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
$pdo->exec('set names utf8');

$sql="select * from user";

$smt=$pdo->prepare($sql);

$smt->execute();

$rows=$smt->fetch(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($rows);
echo '</pre>';
 ?>
