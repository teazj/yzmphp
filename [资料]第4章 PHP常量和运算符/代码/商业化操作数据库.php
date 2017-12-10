<?php 
include 'config.php';

mysql_connect(HOST,USER,PASS);

mysql_query('set names utf8');

mysql_select_db(DBNAME);

$sql="select * from user";
$rst=mysql_query($sql);

while($row=mysql_fetch_assoc($rst)){
	echo '<pre>';
	print_r($row);
	echo '</pre>';
}
 ?>
