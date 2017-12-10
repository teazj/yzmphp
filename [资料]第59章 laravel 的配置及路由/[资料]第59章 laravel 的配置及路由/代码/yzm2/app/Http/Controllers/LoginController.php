<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class LoginController extends Controller
{
   	// 登录页面

    public function index(){
    	
    	return view('login');
    }

    // 处理登录操作

    public function check(){
    	dd($_POST);
    }

    // put请求页面

    public function putWeb(){

    	return view('putWeb');
    }

    // put请求处理页面
    public function put(Request $request){
    	dd($request->input());
    }

}
