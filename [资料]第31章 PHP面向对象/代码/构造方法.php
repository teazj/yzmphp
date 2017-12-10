<?php 
// 类
class Person{
	// 属性
	public $name;

	// 构造方法	
	public function __construct($n){
		$this->name=$n;
	}

	// 方法
	public function say(){
		echo "<p>my name is {$this->name}</p>";
	}
}

$obj=new Person('user1');
$obj->say();

$obj=new Person('user2');
$obj->say();

$obj=new Person('user3');
$obj->say();
?>
