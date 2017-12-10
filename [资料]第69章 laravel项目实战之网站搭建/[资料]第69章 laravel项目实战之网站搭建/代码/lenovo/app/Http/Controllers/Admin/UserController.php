<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

// 使用类

use App\Http\Controllers\Controller;

// 后台管理员控制器
class UserController extends Controller
{
    // 管理员首页

    public function index(){
    	// 加载页面

    	return view("admin.user.index");

    }

    // 添加页面 admin/user/create  get

    public function create(){


    	return view('admin.user.add');
    }

    // 插入操作  admin/user  post

    public function store(){

    }

    // 修改页面 admin/user/{admin}/edit get

    public function edit(){
    	return view('admin.user.edit');

    }


    // 更新操作 admin/user/{admin}  put

    public function update(){

    }

    // 删除操作 admin/user/{admin}   delete

    public function destroy(){

    }
}
