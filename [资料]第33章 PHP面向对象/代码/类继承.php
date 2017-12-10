<?php
// Person.class.php

class Person{
	public $name;
	public $age;

	public function __construct($n,$a){
		$this->name=$n;
		$this->age=$a;
	}

	public function say(){
		echo "<p>my name is {$this->name}!</p>";
	}

	public function getAge(){
		echo "<p>my age is {$this->age}!</p>";
	}
}

class It extends Person{

}

$obj=new It('user123',19);
$obj->say();
$obj->getAge();
?>
