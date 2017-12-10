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

	//析构方法
	public function __destruct(){
		echo "<p>{$this->name}要走啦!</p>";
	}
}

$obj=new Person('user1');
$obj->say();

$obj2=new Person('user2');
$obj2->say();

$obj3=new Person('user3');
$obj3->say();
?>
