<?php 
//Usb父类
interface Usb{
	public function load();

	public function start();

	public function unload();
}

//子类
class Upan implements Usb{
	public function load(){
		echo "<p>Usb is loading</p>";
	}

	public function start(){
		echo "<p>Usb is starting</p>";
	}

	public function unload(){
		echo "<p>Usb is unloading</p>";
	}

	public function jitui(){
		echo '<p>我喜欢鸡腿</p>';
	}
}


 ?>
