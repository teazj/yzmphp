<?php 
mysql_connect('localhost','root','123');
mysql_query('set names utf8');
mysql_select_db('yzmedu');

// 增
// $sql="insert into user(username,age) values('user6','33')";
// if(mysql_query($sql)){
// 	echo '<p>数据插入成功!</p>';
// }


// 删
// $sql="delete from user where id=6";
// if(mysql_query($sql)){
// 	echo '<p>数据删除成功!</p>';
// }

// 改
// $sql="update user set age=55 where id=5";
// if(mysql_query($sql)){
// 	echo '<p>数据修改成功!</p>';
// }

// 查
$sql="select * from user";
$rst=mysql_query($sql);

while($row=mysql_fetch_assoc($rst)){
	echo '<pre>';
	print_r($row);
	echo '</pre>';
}


 ?>
