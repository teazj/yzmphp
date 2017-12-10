<?php 
// 类
class Person{
	// 属性
	public $name;

	// 构造方法	
	public function __construct($n){
		$this->name=$n;
	}

	public function get(){
		return $this->name;
	}

	// 方法
	public function say(){
		echo "my name is ".$this->get();
	}
}

$obj=new Person('user1');
$obj->say();
?>