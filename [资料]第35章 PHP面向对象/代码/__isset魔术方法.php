<?php 
class Usb{
	private $name='user1';
	private $age='20';
	private $sex='nan';

	public function load(){
		echo '<p>load</p>';
	}

	public function __isset($i){
		echo "<p>您无权测试{$i}是否存在!</p>";
	}
}

$obj=new Usb();

$b=isset($obj->name);

var_dump($b);
 ?>
