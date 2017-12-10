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

       // $data= DB::table("User")->select(DB::raw("count(*) tot"))->first();
       // dd($data);
        
        // exit;
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
    public function store(Request $request){

        // 规则

        $rules=[
                'name'=>'required|unique:user|between:6,12',
                "pass"=>'required|between:6,12|same:repass',
            ];

        // 所有数据

        $input=$request->all();

        // 修改提示信息

        $message=array(

            "name.required"=>"请输入用户名",
            "name.unique"=>"用户名以存在",
            "name.between"=>"长度不满足",
            "pass.required"=>"请输入密码",
            "pass.between"=>"密码长度不满足",
            "pass.sname"=>"两次不一致",
            );

        // 设置表单验证的参数
            // 参数一 需要验证的数据
            // 参数二 验证规则
            // 参数三 提示信息
        $validator = \Validator::make($input,$rules,$message);

        
        // 进行验证

        if($validator->passes()){
            // 处理数据
            unset($_POST['_token']);
            unset($_POST['repass']);

            $_POST['pass']=\Crypt::encrypt( $_POST['pass']);
            $_POST['time']=time();
            if (\DB::table("user")->insert($_POST)) {
                # code...
                return redirect("admin/user");
            }else{
                return back();
            }

        }else{
            return back()->withInput()->withErrors($validator);
        }
        // 接收数据

        // $name=$request->input('name');
        // $pass=$request->input('pass');
        // $repass=$request->input('repass');
        // $statu=$request->input('statu');

        // 判断用户名是否存在
        // $request->flash();

        // 使用表单验证

       
        // if ($name) {
        //     // 判断用户名长度
        //     if (strlen($name)>=6 && strlen($name)<=12) {
        //         # code...
        //         // 密码长度

        //         if (strlen($pass)>=6 && strlen($pass)<=12) {
        //             # code...
        //             // 判断两次密码是否一致

        //             if ($pass==$repass) {
        //                 # code...
        //                 // 判断用户名是否重名
        //                 $data=\DB::table("user")->where("name",$name)->first();
        //                 if ($data) {
        //                     return back()->with('status',"用户名已存在");
        //                     # code...
        //                 }else{

        //                     // 数据格式化

        //                     $arr=array(

        //                         "name"=>$name,
        //                         "pass"=>\Crypt::encrypt("$pass"),
        //                         "name"=>$name,
        //                         "time"=>time(),
        //                         "statu"=>$statu,
        //                         );

        //                     if (\DB::table('User')->insert($arr)) {
        //                         # code...

        //                         return redirect("admin/user");
        //                     }else{
        //                         return back()->with('status',"增加数据库失败");

        //                     }
        //                 }
        //             }else{
        //                  return back()->with('status',"两次密码不一致");
        //             }
        //         }else{
        //             return back()->with('status',"密码长度不够");

        //         }
        //     }else{
        //         return back()->with('status',"用户名长度不够");
        //     }
        // }else{
        //     return back()->with('status',"用户名不存在");
        // }

    }


    // 修改操作
    public function update(){

    }


    // 删除操作
    public function destory(){

    }


}
