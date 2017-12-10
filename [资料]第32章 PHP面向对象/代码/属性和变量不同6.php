<?php 
$name=200;
class Person{
	public $name;	

	public function __construct($n){
		$this->name=$n;
	}
}

$obj=new Person(300);
echo $name;
 ?>
