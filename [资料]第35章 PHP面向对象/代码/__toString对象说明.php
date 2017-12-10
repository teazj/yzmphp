<?php 
class Usb{
	public function load(){
		echo '<p>load</p>';
	}

	public function start(){
		echo '<p>start</p>';
	}

	public function unload(){
		echo '<p>unload</p>';
	}

	public function __toString(){
		return 'this is a Object';
	}
}

 ?>
