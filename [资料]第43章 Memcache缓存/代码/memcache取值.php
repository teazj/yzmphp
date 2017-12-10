<?php

$mem=new Memcache();

$mem->connect("localhost","50000");

$str=$mem->get('x');

echo $str;

 ?>
