<?php 
class Usb{
	private $name='user1';

	public function load(){
		echo '<p>load</p>';
	}

	public function __unset($i){
		echo "<p>您无权删除{$i}属性!</p>";
	} }

$obj=new Usb();

unset($obj->name);

 ?>
