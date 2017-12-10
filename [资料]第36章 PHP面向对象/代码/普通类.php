<?php 
class Person{
	public $name;

	public function __construct($n){
		$this->name=$n;
	}

	public function say(){
		echo "<p>my name is {$this->name}</p>";
	}
}

$obj=new Person('user123');
$obj->say();

 ?>
