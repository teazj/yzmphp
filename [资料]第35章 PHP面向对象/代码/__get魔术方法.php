<?php 
class Usb{
	private $name='user1';
	private $age='20';
	private $sex='nan';

	public function load(){
		echo '<p>load</p>';
	}

	public function __get($i){
		echo "<p>您无权访问{$i}属性!</p>";
	}
}

 ?>
