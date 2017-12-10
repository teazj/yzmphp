<?php 
class Person{
	public $name=100;		

	public function say(){
		echo $name;
	}
}

$obj=new Person();

$obj->say();
 ?>
