<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// User控制器
class UserController extends Controller
{
    
    // 添加方法

    public function add(Request $request){

        // 判断当前是get请求

        // echo $request->input('yao','强哥');

        if ($request->isMethod('GET')) {
            // 加载添加页面
            return view('add');
        }else{
            // 数据库的入库操作
            echo "插入数据库";

            // 获取所有的请求数据

            $data=$request->all();

            // dd($data);

            // 获取特定字段

            // echo $request->input('name');

            // 设置默认值
            // echo $request->input('yao','强哥');

            // 判断师傅存在

            // var_dump($request->has('username'));


            // 获取部分数据

            // $data1=$request->only('name','pass');
            // $data1=$request->only(['name','pass']);

            $data1=$request->except('_token','name');
            $data1=$request->except(['_token','name']);

            var_dump($data1);
           



        }

        
    }

    // 文件上传页面面

    public function photo(){
        return view('photo');
    }

    // 文件上传处理

    public function upload(Request $request){
        // 如何实现文件上传
        // 1.1 判断是否上传文件
        // 1.2 把文件移动到指定目录

        // 获取上传文件

            // $img=$request->file('img');

            // $img2=$request->img;
// 
        // 判断文件是否上传

            // var_dump($request->hasFile('img'));


        // 判断文件是否上传

        if ($request->hasFile('img')) {
            // 获取后缀名
            $ext=$request->file('img')->getClientOriginalExtension();
            // 新的文件名

            $newFile=time().rand().".".$ext;

            // 上传文件操作
            $request->file('img')->move('./Uploads',$newFile);
        }else{
            // 回到上一个页面
            return back();
        }
    }


    // 新建cookie方法

    public function cookie(Request $request){

        // 查看所有cookie

            // dd($request->cookie());

        // 查看cookie


            /*echo $request->cookie('laravel_session');

            echo "<hr>";

            echo \Cookie::get('laravel_session');*/

        // 设置COOKIE
            // \Cookie::queue('shauige','非浩哥莫属',10);

           $cookie = cookie('name', 'value', 10);

           return response('Hello World')->cookie($cookie);
    }
}
