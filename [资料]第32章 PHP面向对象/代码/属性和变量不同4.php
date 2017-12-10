<?php 
class Person{
	public $name;	

	public function __construct($n){
		$this->name=$n;
	}

	public function say($n){
		$name=$n;
		echo $this->name;
	}
}

$obj=new Person(300);
$obj->say(500);
 ?>
