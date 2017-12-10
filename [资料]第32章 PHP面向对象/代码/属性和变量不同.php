<?php 
class Person{
	public $name=100;		

	public function say(){
		$name=200;
		echo $this->name;
	}
}

$obj=new Person();

$obj->say();
 ?>
