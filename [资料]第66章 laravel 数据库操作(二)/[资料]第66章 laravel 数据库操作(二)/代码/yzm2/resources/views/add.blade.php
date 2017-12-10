<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="/admin/user/add?meinv=xiaoma&shuaige=qiangge" method="post">
        <p>
            {{csrf_field()}}
            USER:
            <input type="text" name="name" id="">
        </p>
        <p>
            PASS:
            <input type="password" name="pass" id="">
        </p>
        <p>
            <input type="submit" value="提交">
        </p>
    </form>
</body>
</html>