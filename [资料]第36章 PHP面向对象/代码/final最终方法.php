<?php 
class Person{
	public $name;

	public function __construct($n){
		$this->name=$n;
	}

	final public function say(){
		echo "<p>my name is {$this->name}</p>";
	}
}

class It extends Person{
	public function say(){
		
	}
}

 ?>
