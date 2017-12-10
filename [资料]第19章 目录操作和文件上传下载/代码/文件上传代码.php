<?php 
echo '<pre>';
print_r($_FILES);
echo '</pre>';

$name=$_FILES['img']['name'];
$ext=array_pop(explode('.',$name));

$tmp_name=$_FILES['img']['tmp_name'];
$tfile=time().mt_rand().'.'.$ext;

$target='uploads/'.$tfile;

move_uploaded_file($tmp_name,$target);

 ?>
