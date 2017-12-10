<?php 
// 类
class Person{
	// 属性
	public $name='user456';

	// 方法
	public function say(){
		echo "<p>my name is {$this->name}</p>";
	}
}

$obj=new Person();

//调用对象的方法
$obj->say();

?>
