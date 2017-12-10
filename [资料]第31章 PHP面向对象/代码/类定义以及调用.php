<?php 
// 类
class Person{
	// 属性
	public $name='user123';

	// 方法
	public function say(){
		echo '<p>my name is user123</p>';
	}
}

$obj=new Person();

//调用对象的方法
$obj->say();

//调用对象的属性
echo $obj->name;

?>
