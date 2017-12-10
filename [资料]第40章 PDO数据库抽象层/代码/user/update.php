<?php 

include 'config.php';
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$sql="update user set username='{$username}',password='{$password}' where id={$id}";

$smt=$pdo->prepare($sql);
if($smt->execute()){
	echo "<script>location='index.php'</script>";
}
 ?>	

