<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

// 后台图片管理控制器
class PicController extends Controller
{	

   // 后台商品管理首页方法

	public function index(){

	    // 加载用户管理页面
	    return view('admin.pic.index');
	}

	// 后台用户管理修改页面
	public function edit(){

		return view('admin.pic.edit');

	}
	// 后台用户管理添加页面
	public function create(){
		

		return view('admin.pic.create');

	}

	// 添加操作
	public function store(Request $request){

		// 获取数据

		$a=\DB::insert("insert into pic values(null,'$_POST[title]','$_POST[img]')");

		// 判断是否插入成功

		if ($a) {
			# code...
			// 成功进行体跳转
			return redirect("admin/pic");
		}else{
			// 失败返回上一个页面
			return back();
		}
	}


	// 修改操作
	public function update(){

	}


	// 删除操作
	public function destroy(){

	}
}
