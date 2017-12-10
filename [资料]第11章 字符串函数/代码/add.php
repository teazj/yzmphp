<?php 
mysql_connect('localhost','root','12345678');
mysql_query('set names utf8');
mysql_select_db('yzmedu');

$user=$_POST['user'];
$content=htmlspecialchars(addslashes($_POST['content']));
$sql="insert into mess(user,content) values('{$user}','{$content}')";

if(mysql_query($sql)){
	echo '<script>location="index.php"</script>';
}

?>