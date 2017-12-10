<tr>
	<th><input type="checkbox" name="" id=""></th>
	<th>ID</th>
	<th>TITLE</th>
	<th>SORT</th>
	<th>IMG</th>
	<th>操作</th>
</tr>

@foreach($data as $value)
<tr id="tr{{$value->id}}">
	<td><input type="checkbox" value="{{$value->id}}" name="" class="inputs" id=""></td>
	<td>{{$value->id}}</td>
	<td>{{$value->title}}</td>
	<td><input type="text" onchange="change(this,{{$value->id}})" value="{{$value->sort}}" name="" id=""></td>
	<td><img width="200px" src="/Uploads/Goods/{{$value->img}}" alt=""></td>
	<td><a href="/admin/pic/{{$value->id}}/edit" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="del(this,{{$value->id}})" class="glyphicon glyphicon-trash"></a></td>
</tr>

@endforeach