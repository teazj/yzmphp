<?php 

class Person{
	//特征
	public $name='狗蛋';
	public $age=20;
	public $sex='nan';

	//行为
	public function say(){
		echo "今天天气很好，今天心情很不错!<br>";
	}

	public function eat(){
		echo "我生下来就会吃饭，我很开心!<br>";
	}
}

$user1=new Person();
echo $user1->name;
echo '<br>';
echo $user1->sex;
echo '<br>';
$user1->say();
$user1->eat();
?>
