<?php 
$str="lqqhwei@qq.com";

$ptn='/^\w+@\w+\.\w+$/i';

echo preg_match($ptn,$str);
?>
