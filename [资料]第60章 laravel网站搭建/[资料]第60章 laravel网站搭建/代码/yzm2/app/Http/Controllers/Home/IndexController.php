<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

// 前台首页模块
class IndexController extends Controller
{
    // 前台首页方法

    public function index(){
        echo "前台首页";
    }
}
