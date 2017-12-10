<?php 
//pdo预处理类

$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
$pdo->exec('set names utf8');

$sql="select * from user";

$smt=$pdo->prepare($sql);

$smt->execute();

$row=$smt->fetchColumn(0);
echo '<pre>';
print_r($row);
echo '</pre>';

$row=$smt->fetchColumn(0);
echo '<pre>';
print_r($row);
echo '</pre>';
 ?>
