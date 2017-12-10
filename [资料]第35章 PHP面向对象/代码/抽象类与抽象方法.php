<?php 
//Usb父类
abstract class Usb{
	public function load(){
		echo "<p>Usb is loading</p>";
	}

	public function start(){
		echo "<p>Usb is starting</p>";
	}

	abstract public function unload();
}

//子类
class Upan extends Usb{
	public function unload(){
		echo "<p>Usb is unloading</p>";
	}

	public function jitui(){
		echo '<p>我喜欢鸡腿</p>';
	}
}


 ?>
