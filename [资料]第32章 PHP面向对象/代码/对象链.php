<?php 

class Person{
	public function find(){
		echo "<p>this is find action</p>";
		return $this;
	}

	public function attr(){
		echo "<p>this is attr action</p>";
		return $this;
	}

	public function parent(){
		echo "<p>this is parent action</p>";
		return $this;
	}

	public function css(){
		echo "<p>this is css action</p>";
		return $this;
	}

	public $name='<p>小马过河</p>';
}

$obj=new Person();
echo $obj->attr()->css()->attr()->find()->parent()->css()->name;
 ?>
