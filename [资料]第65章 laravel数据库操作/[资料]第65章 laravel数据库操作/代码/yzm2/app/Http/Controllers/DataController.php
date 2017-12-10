<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// 数据库控制器
class DataController extends Controller
{
    
    // 展示页面
    public function index(){
        // 链接数据
        // 查询数据

        // $data=\DB::select('select * from  user');

        // 删除数据
        // 如果删除成功 返回影响行数、
        // var_dump(\DB::delete('delete from user where id>5'));

        // 增加数据
        // 返回值bool 如果成功 true 失败 false
        // var_dump(\DB::insert("insert into user values(null,'123','123',0,'23131321')"));
        // 修改数据
        // 返回值 影响行数 
        // var_dump(\DB::update('update user set name="帅哥" where id>3'));


        // 运行一段命令

        // \DB::statement("create database yzmedu");
        // \DB::statement("drop database yzmedu");

        // 事物机制

        \DB::beginTransaction();

        // 删除id=1数据

        $a=\DB::delete("delete from user where id=1");
        // 删除id=10数据
        $b=\DB::delete("delete from user where id=11");

        if ($a && $b) {
            # code...
            // 提交事务
            \DB::commit();
        }else{
            // 回滚事务
            \DB::rollback();
        }

    }
}
