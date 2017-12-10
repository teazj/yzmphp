<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>我是视图1页面</h1>

		
	@foreach($data as $key=>$value)

		<h1>
			
			<span>{{$value->id}}</span>
			<span>{{$value->name}}</span>
			<span>{{$value->pass}}</span>
			@if($value->statu)
				<span>正常</span>
			@else
				<span>禁用</span>
			@endif
			<span>{{date('Y-m-d H:i:s',$value->time)}}</span>


		</h1>



	@endforeach


</body>
</html>