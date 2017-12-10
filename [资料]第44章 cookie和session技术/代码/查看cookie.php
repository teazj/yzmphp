<?php 

//设置cookie
setcookie('username','user123',time()+30,'/');

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

 ?>
