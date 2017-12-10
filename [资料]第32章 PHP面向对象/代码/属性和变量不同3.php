<?php 
class Person{
	public $name;	

	public function __construct($n){
		$this->name=$n;
	}

	public function say(){
		$name=200;
		echo $this->name;
	}
}

$obj=new Person(300);
$obj->say();
 ?>
