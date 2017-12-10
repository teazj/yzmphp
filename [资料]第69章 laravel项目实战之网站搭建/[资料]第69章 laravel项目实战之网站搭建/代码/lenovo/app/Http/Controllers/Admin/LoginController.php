<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

// 使用类

use App\Http\Controllers\Controller;

// 后台登录控制器
class LoginController extends Controller
{
    // 登录首页

    public function index(){
    	// 加载页面

    	return view("admin.login");
    }

    // 验证码

    public function yzm(){
    	require_once("../resources/code/Code.class.php");

    	// 实例化

    	$code=new \Code();

    	// 生成验证码

    	$code->make();
    }
}
