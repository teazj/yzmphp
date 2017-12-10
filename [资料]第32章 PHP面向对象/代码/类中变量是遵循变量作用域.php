<?php 
$name=10;

class Person{
	public $name;		

	public function say(){
		echo $name;
	}
}

$obj=new Person();

$obj->say();
 ?>