<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="/upload" method="post" enctype="multipart/form-data">
        <p>
            {{csrf_field()}}
            PHOTO:
            <input type="file" name="img" id="">
        </p>
       
        <p>
            <input type="submit" value="提交">
        </p>
    </form>
</body>
</html>