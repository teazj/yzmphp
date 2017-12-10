<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>index</title>
</head>
<body>
	<form action="list.php" method='post'>
		<p>选择爱好:</p>	
		<p>
			<label>
				<input type="checkbox" name='love[]' value='linux'> linux
			</label>
		</p>
		<p>
			<label>
				<input type="checkbox" name='love[]' value='php'> php
			</label>
		</p>
		<p>
			<label>
				<input type="checkbox" name='love[]' value='html5'> html5
			</label>
		</p>

		<p>
			<input type="submit" value="提交">
			<input type="reset" value='取消'>
		</p>
	</form>
</body>
</html>
