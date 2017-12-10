<?php 
$username=$_POST['username'];
$password=$_POST['password'];

if(($username=='admin' || $username=='administrator') && ($password=='123' || $password=='456')){
	setcookie('admin_username',$username,time()+3600,'/');
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>location='login.php'</script>";
}

 ?>