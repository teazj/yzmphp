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


$obj=new Person('user1',20);
$obj->say();
$obj->getAge();
?>
