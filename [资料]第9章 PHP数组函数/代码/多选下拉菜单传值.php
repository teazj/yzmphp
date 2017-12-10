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
			<select name="love[]" multiple>
				<option value='linux'>linux</option>	
				<option value='php'>php</option>	
				<option value='html5'>htm5</option>	
			</select>	
		</p>

		<p>
			<input type="submit" value="提交">
			<input type="reset" value='取消'>
		</p>
	</form>
</body>
</html>
