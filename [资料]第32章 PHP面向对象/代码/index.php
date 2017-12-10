<?php 
// 人类(父类)
class Person{
	public $name;

	public function __construct($n,$a){
		$this->name=$n;
		$this->age=$a;
	}

	public function say(){
		echo "<p>my name is {$this->name},the age is {$this->age}</p>";
	}	

	public function eat(){
		echo "<p>{$this->name}正在吃饭</p>";
	}

	public function sleep(){
		echo "<p>{$this->name}正在睡觉</p>";
	}
}

// it人员
class It extends Person{
	public $soft;

	public function __construct($n,$a,$s){
		parent::__construct($n,$a);
		$this->soft=$s;
	}

	public function soft(){
		echo "<p>{$this->name}正在开发{$this->soft}软件</p>";
	}
}

$obj=new It('小马',20,'PHP');

$obj->say();
$obj->soft();
$obj->eat();
$obj->sleep();

 ?>