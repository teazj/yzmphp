<?php 
$pdo=new PDO('mysql:host=localhost;dbname=yzmedu','root','123');
$pdo->exec('set names utf8');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$sql="select * from user";
$smt=$pdo->query($sql);
$rows=$smt->fetchAll();

echo '<pre>';
print_r($rows);
echo '</pre>';

 ?>

