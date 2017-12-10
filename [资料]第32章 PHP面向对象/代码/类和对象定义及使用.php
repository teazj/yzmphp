<?php 

class Person{
	public $name;
	public $age;

	public function __construct($n,$a){
		$this->name=$n;
		$this->age=$a;
	}

	public function say(){
		echo "my name is {$this->name},my age is {$this->age}";
	}
}

$obj=new Person('小菜',10);

$obj->say();
 ?>
