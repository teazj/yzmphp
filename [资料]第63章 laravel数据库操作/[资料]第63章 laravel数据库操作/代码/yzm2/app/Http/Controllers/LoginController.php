<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// Login控制器
class LoginController extends Controller
{
    
    // 注册页面

    public function index(){
        return view('reg');
    }

    // 注册功能

    public function insert(Request $request){

        // 判断用户名长度

        $name=$request->input('name');
        // // 写入闪存
        //     // 把表单提交所有数据写入闪存

        //     $request->flash();

        //     // 把谁写入闪存

        //     $request->flushOnly();


        //     // 初了谁写入闪存
        //     $request->flushExcept();


        if (strlen($name)>=6 && strlen($name)<=12) {
            # code...
        }else{


            // 回退上一个页面
            return back()->with('errors','用户名长度不满足')->withInput();
        }
    }
}
