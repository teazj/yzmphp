<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Put页面</h1>
    <form action="put" method="post">
        <p>
            {{csrf_field()}}

            <input type="hidden" name="_method" value="put">
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