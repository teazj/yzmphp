<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

// 使用类

use App\Http\Controllers\Controller;

// 商品页控制器
class GoodsController extends Controller
{
    // 商品页

    public function index(){
    	// 加载页面

    	return view("home.goods");
    }
}
