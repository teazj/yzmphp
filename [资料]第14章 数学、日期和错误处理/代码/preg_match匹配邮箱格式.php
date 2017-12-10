<?php 
$str='lqqhwei@yzmedu.com';

$ptn='/^\w+@\w+\.\w+$/';

$num=preg_match($ptn,$str);

echo $num;
 ?>
