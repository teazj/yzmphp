<?php 

$ip='1.192.168.20.2';

$ptn='/^\d+\.\d+\.\d+\.\d+$/';
echo preg_match($ptn,$ip);

 ?>
