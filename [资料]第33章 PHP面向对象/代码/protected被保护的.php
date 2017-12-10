<?php
// Person.class.php

class Person{
	protected $name;
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

// 类继承
class It extends Person{
	public $programme;

	public function __construct($n,$a,$p){
		parent::__construct($n,$a);

		$this->programme=$p;
	}

	public function develop(){
		echo "<p>my programme is {$this->programme}</p>";
	}

	public function mysay(){
		echo $this->name;
	}

}

$obj=new It('user123',19,'PHP');

// echo $obj->name;

echo $obj->mysay();
?>

