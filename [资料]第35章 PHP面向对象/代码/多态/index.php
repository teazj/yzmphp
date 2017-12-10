<?php 
include 'Person.class.php';

$obj=new Upan2();
$obj2=new Udisk();
$obj3=new Ucharge();

//t420电脑usb接口只认别符合国际Usb规范的标准设备
function useUsb(Usb $o){
	$o->load();
	$o->start();
	$o->unload();
	echo '<hr>';
}

useUsb($obj);
useUsb($obj2);
useUsb($obj3);

 ?>