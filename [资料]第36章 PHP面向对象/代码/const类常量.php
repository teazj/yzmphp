<?php 
class Person{
	public $name;
	const host='localhost';

	public function __construct($n){
		$this->name=$n;
	}

	public function say(){
		echo "<p>my name is {$this->name}</p>";
	}
}

echo Person::host;

 ?>
