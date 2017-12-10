<?php 
$sfile='bbb.txt';
$dfile='abc/eee.txt';

copy($sfile,$dfile);
unlink($sfile);

 ?>
