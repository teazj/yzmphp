<?php 
// 人类(父类)
class UserPerson{
	public $name;

	public function __construct($n){
		$this->name=$n;
	}

	public function say(){
		echo "my name is {$this->name}";
	}	
}

?>