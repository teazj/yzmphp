<?php 
$file='b.txt';

$fp=fopen($file,'a');

$str="aaaaaaa<br>bbbbbb<br>ccccc<br>ddddd<br>";

fwrite($fp,$str);

fclose($fp);
 ?>
