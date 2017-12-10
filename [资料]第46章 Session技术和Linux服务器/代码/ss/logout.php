<?php 
// 开启session
session_start();

// 清空session数组
$_SESSION=array();

// 销毁session文件
session_destroy();

// 删除cookie文件
setcookie('PHPSESSID','',time()-1,'/');

// 退出后去登录页面
echo "<script>location='login.php'</script>";
 ?>