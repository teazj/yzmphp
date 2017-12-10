<?php 
$file='b.txt';

$fp=fopen($file,'w');

$str="aaaaaaa<br>bbbbbb<br>ccccc<br>ddddd";

fwrite($fp,$str);

 ?>
