<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1" width="800px" align="center">
        <th>ID</th>
        <th>name</th>
        <th>PASS</th>
        <th>statu</th>
        <th>time</th>

        @foreach($data as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->pass}}</td>
            <td>{{$value->statu}}</td>
            <td>{{$value->time}}</td>
        </tr>

        @endforeach
    </table>
</body>
</html>