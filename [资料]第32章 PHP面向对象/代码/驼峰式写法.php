<?php 
// 人类(父类)
class userPerson{
	public $name;

	public function __construct($n){
		$this->name=$n;
	}

	public function say(){
		echo "my name is {$this->name}";
	}	
}

// linuxIsVeryGood 驼峰式写法

// LinuxIsVeryGood 严格的驼峰式写法
?>
