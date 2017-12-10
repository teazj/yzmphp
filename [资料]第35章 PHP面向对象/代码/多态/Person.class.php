<?php 
//Usb父类
interface Usb{
	public function load();

	public function start();

	public function unload();
}

//子类
abstract class Upan implements Usb{
	public function load(){
		echo "<p>Usb is loading</p>";
	}
}

//子子类
class Upan2 extends Upan{
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

class Udisk implements Usb{
	public function load(){
		echo "<p>Udisk is loading</p>";
	}

	public function start(){
		echo "<p>Udisk is starting</p>";
	}

	public function unload(){
		echo "<p>Udisk is unloading</p>";
	}

	public function run(){
		echo '<p>Udisk is runing</p>';
	}
}

//usb盗版厂家出现了
class Ucharge{
	public function load(){
		echo "<p>Ucharge is loading</p>";
	}

	public function start(){
		echo "<p>Ucharge is starting</p>";
	}

	public function unload(){
		echo "<p>Ucharge is unloading</p>";
	}

	public function chongdian(){
		echo "<p>手机已经开始充电</p>";
	}
}

 ?>