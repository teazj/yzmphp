<?php 
final class Person{
	public $name;

	public function __construct($n){
		$this->name=$n;
	}

	public function say(){
		echo "<p>my name is {$this->name}</p>";
	}
}

class It extends Person{
	
}

 ?>
