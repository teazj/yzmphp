@extends('muban.admin')

@section('main')
<!-- 内容 -->
<!-- 内容 -->
<div class="col-md-10">
	
	<ol class="breadcrumb">
		<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
		<li><a href="#">图片管理</a></li>
		<li class="active">图片列表</li>

		<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
	</ol>

	<!-- 面版 -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<button class="btn btn-danger" onclick="delAll()"><span class="glyphicon glyphicon-trash"></span> 批量删除</button>
			<a href="/admin/pic/create" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加图片</a>
			
			<p class="pull-right tots" >共有 <span id="tot">{{count($data)}}</span> 条数据</p>
			<form action="" class="form-inline pull-right">
				<div class="form-group">
					<input type="text" name="" class="form-control" placeholder="请输入你要搜索的内容" id="">
				</div>
				
				<input type="submit" value="搜索" class="btn btn-success">
			</form>


		</div>
		<table class="table-bordered table table-hover" id="table">
			<th><input type="checkbox" name="" id=""></th>
			<th>ID</th>
			<th>TITLE</th>
			<th>SORT</th>
			<th>IMG</th>
			<th>操作</th>

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
			
		</table>

		<!-- 分页效果 -->
		<div class="panel-footer">
			<nav style="text-align:center;">
				<ul class="pagination">
					@for($i=1;$i<=$page;$i++)
					
						<li><a href="javascript:;" onclick="page1(this,{{$i}})">{{$i}}</a></li>
					@endfor
					<!-- <li><a href="#">&laquo;</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&raquo;</a></li> -->
				</ul>
			</nav>

		</div>
	</div>
</div>
<script>
	// 无刷新的分页

	function page(obj,page){

		// 发送ajax请求
		var str='<tr><th><input type="checkbox" name="" id=""></th><th>ID</th><th>TITLE</th><th>SORT</th><th>IMG</th><th>操作</th></tr>';
		$.get('/admin/pic',{'page':page},function(data){
			// 处理数据

			for(var i=0;i<data.length;i++){

				str+='<tr id="tr'+data[i].id+'">';
				str+='<td><input type="checkbox" value="'+data[i].id+'" name="" class="inputs" id=""></td>';
				str+='<td>'+data[i].id+'</td>'
				str+='<td>'+data[i].title+'</td>'
				str+='<td><input type="text" onchange="change(this,'+data[i].id+'" value="'+data[i].sort+'" name="" id=""></td>'
				str+='<td><img width="200px" src="/Uploads/Goods/'+data[i].img+'" alt=""></td>'
				str+='<td><a href="/admin/pic/'+data[i].id+'/edit" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="del(this,'+data[i].id+')" class="glyphicon glyphicon-trash"></a></td>';
				str+='</tr>';
			}

			// 写入到表格中

			$("#table").html(str);
		});
	}

	function page1(obj,page){

		// 发送ajax请求
		
		$.get('/admin/pic',{'page':page},function(data1){
			// 处理数据

			$("#table").html(data1);


		});
	}
	// obj,id 接收参数
	function del(obj,id){

		// 发送ajax请求

		// $.post(请求地址,传递参数,响应请求);
		// data可以随便命名 主要接收ajax返回的数据

		$.post('/admin/pic/'+id,{'id':id,'_method':'delete','_token':'{{ csrf_token() }}'},function(data){

			// 判断接收的数据如果1成功 0失败

			if (data) {

				// 移除对应删除的数据

				$(obj).parent().parent().remove();

				// 获取总数条数
				tot=Number($("#tot").html());

				// 修改总数据条数
				$("#tot").html(--tot);

			}else{
				alert('删除失败');
			}

		});
	}

	// 批量删除方法

	function delAll(){
		// 获取被选中数据的值
		var arr=[];
		// 获取所有的数据 并且是被选中的

		inputs=$(".inputs:checked");

		// 获取选中数据的value值

		for (var i = inputs.length - 1; i >= 0; i--) {

			// 把值压入到数组
			arr.push(inputs.eq(i).val());
		};
		// 把arr转换成字符串

		str=arr.join(',');

		// 发送ajax请求

		$.post('/admin/pic/delAll',{'str':str,'_token':'{{csrf_token()}}'},function(data){

			// 判断数据是否删除成功

			if (data==arr.length) {

				// 移除对应的数据

				for (var i = arr.length - 1; i >= 0; i--) {
					$("#tr"+arr[i]).remove();
				};

				// 修改数据个数

				tot=Number($("#tot").html())-Number(data);

				$("#tot").html(tot);

			}else{
				alert('删除失败');
			}

		});


	}

	// 无刷新排序

	function change(obj,id){
		// 获取ID

		// 获取用户修改的值

		val=$(obj).val();

		// 发送ajax请求

		$.post('/admin/pic/sort',{'id':id,'val':val,'_token':'{{csrf_token()}}'},function(data){

			// 判断师傅修改成功
			if (data==1) {
				// 页面自动刷新
				window.location.reload();
			}else{
				alert('修改失败');
			}

		});
	}
</script>

@endsection