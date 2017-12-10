<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use DB;

// 后台用户管理首页控制器
class UserController extends Controller
{
   // 后台用户管理首页方法

    public function index(){
        
        // 加载用户管理页面
        return view('admin.user.index');
    }

    // 后台用户管理修改页面
    public function edit(){
    	return view('admin.user.edit');

    }
    // 后台用户管理添加页面
    public function create(){
    	return view('admin.user.create');

    }

    // 添加操作
    public function store(){

    }


    // 修改操作
    public function update(){

    }


    // 删除操作
    public function destory(){

    }


}
