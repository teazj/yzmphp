<?php 
//heredoc

$a=10;

$b=<<<X
<html>
	<head>
		<style>
			body{
				background:#ccc;
			}
		</style>
	</head>
	<body>
		<h1>$a is very much</h1>
		<h1>$a is very much</h1>
		<h1>$a is very much</h1>
		<h1>$a is very much</h1>
		<h1>$a is very much</h1>
	</body>
</html>
X;

echo $b;
 ?>
