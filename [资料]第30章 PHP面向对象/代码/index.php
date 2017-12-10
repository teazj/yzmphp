<?php 
// 定义一个人类

class Person{
	// 特征(属性)(变量)
	public $name='狗蛋';

	// 行为(方法)(函数)
	public function say(){
		echo '我喜欢哭，我叫狗蛋<br>';
	}
}

//从人类中实例化出一个人，这个人有名字，还会说话

$user=new Person();

echo $user->name;
echo '<br>';
$user->say();

 ?>