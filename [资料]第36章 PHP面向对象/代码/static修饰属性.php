<?php 
// 静态属性

class Person{
	public $name;
	static public $num;

	public function __construct($n){
		$this->name=$n;
		Person::$num++;
	}

	public function say(){
		echo "<p>my name is {$this->name}</p>";
	}
}

$obj=new Person('user1');
$obj2=new Person('user2');
$obj3=new Person('user3');
$obj4=new Person('user4');
$obj5=new Person('user5');

echo Person::$num;

 ?>
