<?php
$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo->exec('set names utf8');

$sql="select * from user";
$smt=$pdo->prepare($sql);
$smt->execute();

$rows=$smt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($rows);
echo '</pre>';
 ?>