<?php 
//Usb父类
interface Usb{
	public function load();

	public function start();

	public function unload();
}

interface Usb2 extends Usb{
	public function run();
}

//子类
class Upan implements Usb2{
	public function load(){
		echo "<p>Usb is loading</p>";
	}

	public function start(){
		echo "<p>Usb is starting</p>";
	}

	public function unload(){
		echo "<p>Usb is unloading</p>";
	}

	public function run(){
		echo "<p>Usb is runing</p>";
	}

	public function jitui(){
		echo '<p>我喜欢鸡腿</p>';
	}
}


 ?>
