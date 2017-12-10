<?php 
$int_a = 5;
function factorial() {
	for($int_i=$int_a; $int_i>0; $int_i--) {
		$int_a = $int_a * $int_i;
	}
}
factorial();
echo $int_a;
 ?>
