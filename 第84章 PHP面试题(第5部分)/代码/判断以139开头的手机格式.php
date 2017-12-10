<?php 

$tel='13912345678';

$ptn='/^139\d{8}$/';

echo preg_match($ptn,$tel);

 ?>