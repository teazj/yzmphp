<?php 
class Person{
	public $name=100;		

	public function say(){
		echo $this->name;
	}
}

$obj=new Person();

$obj->say();
 ?>
