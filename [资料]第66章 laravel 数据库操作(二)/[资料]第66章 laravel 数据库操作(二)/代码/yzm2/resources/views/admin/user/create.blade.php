@extends('muban.admin')

@section('main')

<!-- 内容 -->
<div class="col-md-10">
	
	<ol class="breadcrumb">
		<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
		<li><a href="#">用户管理</a></li>
		<li class="active">管理员添加</li>

		<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
	</ol>

	<!-- 面版 -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<a href="index.html" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 管理员页面</a>
			<a href="" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加管理员</a>
			
			


		</div>
		

		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
			
		<div class="panel-body">
			<form action="/admin/user" method="post">
				<div class="form-group">
					{{csrf_field()}}
					<label for="">NAME</label>
					<input type="text" name="name" value="{{old('name')}}" class="form-control" id="">
				</div>

				<div class="form-group">
					<label for="">PASS</label>
					<input type="password" name="pass" value="{{old('pass')}}" class="form-control" id="">
				</div>
				<div class="form-group">
					<label for="">REPASS</label>
					<input type="password" name="repass" value="{{old('repass')}}" class="form-control" id="">
				</div>
				<div class="form-group">
					<label for="">STATU</label>
					<br>
					<input type="radio" name="statu" id="" checked value="0">正常
					<input type="radio" name="statu" id="" value="1">禁用
				</div>

				<div class="form-group">
					<input type="submit" value="提交" class="btn btn-success">
					<input type="reset" value="重置" class="btn btn-danger">
				</div>

			</form>
		</div>
		
	</div>
</div>

@endsection