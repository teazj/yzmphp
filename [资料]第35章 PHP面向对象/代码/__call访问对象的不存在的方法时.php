<?php 
class Usb{
	public function load(){
		echo '<p>load</p>';
	}

	public function __call($i,$j){
		echo "<p>您访问的<b>{$i}</b>方法不存在!</p>";
	}
}

 ?>
