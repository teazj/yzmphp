<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

// 使用类

use App\Http\Controllers\Controller;

// 后台管理员控制器
class AdminController extends Controller
{
    // 管理员首页

    public function index(){
    	// 加载页面

    	return view("admin.admin.index");

    }

    // 添加页面 admin/admin/create  get

    public function create(){


    	return view('admin.admin.add');
    }

    // 插入操作  admin/admin  post

    public function store(Request $request){
        
        // 直接把字符串数组化

        parse_str($_POST['str'],$arr);

        // 移除repass
        unset($arr['repass']);

        $arr['time']=time();

        // 插入数据库

        if (\DB::table('admin')->insert($arr)) {
            # code...
            echo "1";
        }else{
            echo "0";
        }
    }

    // 修改页面 admin/admin/{admin}/edit get

    public function edit(){
    	return view('admin.admin.edit');

    }


    // 更新操作 admin/admin/{admin}  put

    public function update(){

    }

    // 删除操作 admin/admin/{admin}   delete

    public function destroy(){

    }
}
