<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use DB;

// 后台商品管理控制器
class GoodsController extends Controller
{
   // 后台商品管理首页方法

    public function index(){
        echo "我是后台商品管理首页";
    }
}
