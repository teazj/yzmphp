<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use DB;

// 后台首页控制器
class IndexController extends Controller
{
   // 后台首页方法

    public function index(){
        // 引入页面

        return view('admin.index');
    }
}
