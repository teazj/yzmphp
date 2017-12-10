<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="check" method="post">
        <p>
            {{csrf_field()}}
            User:
            <input type="text" name="user" id="">
        </p>
        <p>
            PASS
            <input type="password" name="pass" id="">
        </p>
        <p>
            <input type="submit" value="提交">
            <input type="reset" value="重值">
        </p>
    </form>
    
</body>
</html>