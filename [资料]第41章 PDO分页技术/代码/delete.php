<?php 
include 'config.php';

$id=$_GET['id'];
$sql="delete from user where id={$id}";

$smt=$pdo->prepare($sql);
if($smt->execute()){
	echo "<script>location='index.php'</script>";
}
 ?>