<?php 
class Person{
	public $name;

	public function __construct($n){
		$this->name=$n;
	}

	public function say(){
		echo "<p>my name is {$this->name}</p>";
	}

	static public function sum($i,$j){
		return $i+$j;
	}
}

echo Person::sum(5,20);
 ?>
