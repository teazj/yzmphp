<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
// 视图控制器
class ShiTuController extends Controller
{
    
    // index

    public function index(){

        // $name="云知梦 只为有梦想的人1";

        // $qiangge="强哥 我们爱你 ";
        // 只分配一个数据
            // return view('shitu')->with('meinv',$name);
        // 分配多个数据
            // return view('shitu')->with('name',$name)->with('qiangge',$qiangge);
            // return view('shitu')->with(['name'=>$name,'shuaige'=>$qiangge]);

            // $data=array(
            //     // 名字   
            //     "name"=>$name,

            //     // 帅哥
            //     "shuaige"=>$qiangge

            //     );

            // return view('shitu',$data);
            // return view('shitu')->with($data);

        // 使用函数

        return view('shitu')->with('pass','123')->with('pass1','234')->with('html','<b>我 是一个 大美女</b>');


    }

    // 

    public function index1(){
        // return view('shitu1')->with("qiange",180);


        $data=DB::table('user')->get();
        

        return view('shitu1')->with('data',$data);
    }

    // 新建模板布局方法

    public function buju(){
        return view('buju');
    }

    // 包含方法

    public function baohan(){
        return view('baohan');
    }

}
