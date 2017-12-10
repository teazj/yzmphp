<?php 
//连接数据库
$conn=mysql_connect('localhost','root','12345678');

//设置字符集
mysql_query('set names utf8',$conn);

//选择yzmedu数据库
mysql_select_db('yzmedu',$conn);

//准备查询语句
$sql="select * from user";

//把语句发送到mysql服务器
$rst=mysql_query($sql,$conn);

//从mysql服务器返回的结果集中读取出每一行数据
while($row=mysql_fetch_assoc($rst)){

	//打印数组
	echo '<pre>';
	print_r($row);
	echo '</pre>';
}

?>
