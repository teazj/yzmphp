<?php 
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

if($username=='admin' && $password=='123'){
	$_SESSION['admin_username']=$username;
	
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>location='login.php'</script>";
}

 ?>