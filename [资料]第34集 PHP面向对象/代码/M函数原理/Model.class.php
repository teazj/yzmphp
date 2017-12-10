<?php 
class Model{
	public $name;

	public function __construct($n){
		$this->name=$n;
	}

	public function say(){
		echo "my name is {$this->name}";
	}
}
 ?>

