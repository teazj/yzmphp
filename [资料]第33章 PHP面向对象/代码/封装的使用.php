<?php
// Person.class.php
// (5*5)-(5+5)=25-10=15

class Counter{
	private $num1;
	private $num2;

	public function __construct($n1,$n2){
		$this->num1=$n1;
		$this->num2=$n2;
	}

	private function getSum(){
		return $this->num1+$this->num2;
	}	

	private function getProduct(){
		return $this->num1*$this->num2;
	}

	public function getReturn(){
		return $this->getProduct()-$this->getSum();
	}
}

$obj=new Counter(5,5);

echo $obj->getReturn();
?>

