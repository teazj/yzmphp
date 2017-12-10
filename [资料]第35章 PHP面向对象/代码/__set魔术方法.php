<?php 
class Usb{
	private $name='user1';
	private $age='20';
	private $sex='nan';

	public function load(){
		echo '<p>load</p>';
	}

	public function __set($i,$j){
		echo "<p>你无权设置{$i}为{$j}!</p>";
	}
}

$obj=new Usb();

$obj->name='user999';
$obj->age='20';
$obj->sex='nv';
 ?>
