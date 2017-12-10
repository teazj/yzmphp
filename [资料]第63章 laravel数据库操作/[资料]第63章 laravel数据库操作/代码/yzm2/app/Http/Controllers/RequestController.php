<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// laravel的请求
class RequestController extends Controller
{
    // 首页方法

    public function index(Request $request){
    	// 输出当前url地址

    	// echo $request->fullUrl();
    		//http://www.yzmedu2.com/request?name=100

    	// 获取URL的路由

    	// echo "<hr>";

    	// echo $request->path();
    		//request

    	// 获取所有的参数

    	// echo "<hr>";

    	// echo $request->url();
    		//http://www.yzmedu2.com/request

    	// 判断路由是否是request
    	// echo "<hr>";


    	// var_dump($request->is('abc'));
    	

    	// 判断当前的请求类型

    	// echo $request->method();

    	// 判断当前的请求是不是get请求

    	var_dump($request->isMethod('POST'));
    	
    	
    }
}
