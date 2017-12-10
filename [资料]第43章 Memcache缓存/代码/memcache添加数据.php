<?php 

$mem=new Memcache();

$mem->connect("localhost","50000");

$b=$mem->set('name2','linux');

var_dump($b);

 ?>
