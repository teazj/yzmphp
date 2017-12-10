<?php

$mem=new Memcache();

$mem->connect("localhost","50000");

$mem->set('age3','50',0,10);

 ?>
