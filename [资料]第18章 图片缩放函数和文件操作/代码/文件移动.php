<?php 
$sfile='aaa.txt';
$dfile='eee.txt';

copy($sfile,$dfile);
unlink($sfile);

 ?>
