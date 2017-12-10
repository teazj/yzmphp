<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use DB;

// 后台商品管理控制器
class DataController extends Controller
{
   // 后台商品管理首页方法

    public function index(){
    	// table  // 切换表
    	$data=\DB::table("pic")->get();
    	// get  // 查询所有数据

    	// first  // 查询第一条数据
    	$data=\DB::table("pic")->first();
    	// find 

    	$data=\DB::table('user')->find(2);

    	// select
    	$data=\DB::table("user")->select("name",'pass')->get();

    	// 使用mysql函数

    	$data=\DB::table("user")->select(DB::raw("count(*) tot"))->get();

    	// 使用where条件

    	// $data=\DB::table("user")->where("name",'=','abc')->get();
    	// $data=\DB::table("user")->where('id','>',10)->get();
    	// $data=\DB::table("user")->where([['pass','=','123'],['id','<','5']])->get();
    	// $data=\DB::table("user")->where('pass','=','123')->orWhere("name",'=','帅哥')->get();

    	// 排序
    		$data=\DB::table("user")->orderBy('id','desc')->get();

    	// 截取
    		// offset 截取开始位置
    		// limit 截取几个
    		$data=\DB::table("user")->offset(3)->limit(3)->get();

    	// 统计

    		$data=\DB::table("user")->count();
    		$data=\DB::table("user")->max('id');
    		$data=\DB::table("user")->min('id');
    		$data=\DB::table("user")->avg('id');
    		$data=\DB::table("user")->sum('id');

    	// 分组

    		$data=\DB::table("user")->select(DB::raw("pass,count(*) tot"))->groupBy("pass")->get();
    	// 聚合
    		$data=\DB::table("user")->select(DB::raw("pass,count(*) tot"))->having("tot",">",2)->groupBy("pass")->get();

    	// 多表查询
    		// class id name
    		// goods id gname cid
    		// 网站开发中使用多表查询
    		// select class.name,goods.* from class,goods where class.id=goods.cid
    		// $data=\DB::select("select class.name,goods.* from class,goods where class.id=goods.cid");
   			// 多表
   			$data=\DB::table("goods")->select("class.name","goods.*")->join("class",'class.id','=','goods.cid')->get();
   			// 左连接
   			$data=\DB::table("goods")->select("class.name","goods.*")->leftJoin("class",'class.id','=','goods.cid')->get();
   			// 右连接
   			$data=\DB::table("goods")->select("class.name","goods.*")->rightJoin("class",'class.id','=','goods.cid')->get();
    	// 增加

   			// 增加一条数据
   			$arr=array(
   				"gname"=>'衣服',
   				"cid"=>'5'
   				);
   			$data=\DB::table("goods")->insert($arr);
   			// 增加多条数据
   			$arr=array(
   					array(
	   					"gname"=>'衣服1',
	   					"cid"=>'5'
   					),
   					array(
	   					"gname"=>'衣服2',
	   					"cid"=>'5'
   					),
   				
   				);

   			$data=\DB::table("goods")->insert($arr);
   			// 获取增加的ID

   			$data=\DB::table("goods")->insertGetId(['gname'=>'农药001','cid'=>4]);
   		// 修改
   			$data=\DB::table("goods")->where("id",'=',8)->update(['gname'=>'美女']);

   		// 删除
   			// 返回的影响行数
   			$data=\DB::table("goods")->delete(8);
   			$data=\DB::table("goods")->where("id",'=',9)->delete();
   			$data=\DB::table("goods")->delete();
    	dd($data);
    }


    // 密码加密方法

    public function pass(){
    	echo md5('123');

    	echo "<hr>";
    	echo $pass=\Crypt::encrypt('123');
    	echo "<hr>";

    	echo strlen($pass);
    	echo "<hr>";
    	
    	echo \Crypt::decrypt('eyJpdiI6IkdRSzdhUFdrOUt3WGxPM0hvaFNUb1E9PSIsInZhbHVlIjoiQ0JHeWNQc3NYeUthYmRnY3BPd1lBZz09IiwibWFjIjoiMGFjZjAwZWRjMmI0Nzk2ODY5OWM1MWU1Yjc3NDBmZGI5NjM2ZmJkNGYxODIxZDEwZDg5OThiOTFiNTBiMjM1OCJ9
');
    }
}
