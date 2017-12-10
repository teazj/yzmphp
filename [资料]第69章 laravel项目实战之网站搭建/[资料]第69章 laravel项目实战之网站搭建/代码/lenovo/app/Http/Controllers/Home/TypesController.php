<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

// 使用类

use App\Http\Controllers\Controller;

// 分类页控制器
class TypesController extends Controller
{
    // 分类页

    public function index(){
    	// 加载页面

    	return view("home.types");
    }
}
