<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php 

        if (is_object($errors)) {
            # code...
        }else{
            echo "<h1>$errors</h1>";
        }


     ?>
    <form action="/insert" method="post">
        <p>
            {{csrf_field()}}
            USER:
            <input type="text" name="name" id="" value="{{old('name')}}">
        </p>
        <p>
            PASS:
            <input type="password" name="pass" id="" value="">
        </p>
        <p>
            REPASS:
            <input type="password" name="repass" id="" value="">
        </p>
        <p>
            TEL:
            <input type="text" name="tel" id="" value="{{old('tel')}}">
        </p>
        <p>
            EMAIL
            <input type="text" name="email" id="" value="{{old('email')}}">
        </p>
        <p>
            <input type="submit" value="提交">
        </p>
    </form>
</body>
</html>