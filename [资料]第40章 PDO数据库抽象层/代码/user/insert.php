<?php 
include 'config.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql="insert into user(username,password) values('{$username}','{$password}')";

$smt=$pdo->prepare($sql);
if($smt->execute()){
	echo "<script>location='index.php'</script>";
}

?>