<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use DB;

// 后台用户管理首页控制器
class UserController extends Controller
{
   // 后台用户管理首页方法

    public function index(){
        // 连贯操作

        // 查询所有数据
        // $data=\DB::select("select * from user");
        // $data=\DB::table("user")->get();

       
        // 查询一条数据
        // select * from user where id=2;
        // $data=\DB::table("user")->find("2");
        // $data=\DB::table("user")->where("id",'=',3)->first();
        // $data=\DB::table("user")->where("id",3)->first();
        // $data=\DB::table("user")->where("id",'>',5)->get();
        // $data=\DB::table("user")->where("id",'<',5)->get();
        // $data=\DB::table("user")->where([['id','>=',2],['id','<=',5]])->get();
        // $data=\DB::table("user")->where([['name','like','%2%'],['id','<=',15]])->get();
        // $data=\DB::table("User")->where("name","like","%2%")->orwhere("pass",'=','123')->get();
       
        // $data=\DB::table("User")->whereBetween('id',[10,15])->get();
        // $data=\DB::table("User")->whereNotBetween('id',[10,15])->get$data=\DB::table("User")->whereBetween('id',[10,15])->get();();
        // $data=\DB::table("User")->whereIn("id",[2,5,12,15])->get();
        // $data=\DB::table("User")->whereNotIn("id",[2,5,12,15])->get();
        // $data=\DB::table("User")->whereNull("pass")->get();
        // $data=\DB::table("User")->whereNotNull("pass")->get();

        // select name from user where id=2;

        // echo  \DB::table("User")->where("id",2)->value('name');
        // $data=\DB::table("User")->pluck('name');

        // // echo DB::table("User")->count();
        // echo DB::table("User")->max('time');

        // echo "<hr>";
        // echo DB::table("User")->min('time');

        // echo "<hr>";
        // echo DB::table("User")->avg('time');
        // echo "<hr>";

        // echo DB::table("User")->sum('time');

        // select count(*) tot from user

       $data= DB::table("User")->select(DB::raw("count(*) tot"))->first();
       dd($data);
        
        exit;
        // 加载用户管理页面
        return view('admin.user.index');
    }

    // 后台用户管理修改页面
    public function edit(){
    	return view('admin.user.edit');

    }
    // 后台用户管理添加页面
    public function create(){
    	return view('admin.user.create');

    }

    // 添加操作
    public function store(){

    }


    // 修改操作
    public function update(){

    }


    // 删除操作
    public function destory(){

    }


}
