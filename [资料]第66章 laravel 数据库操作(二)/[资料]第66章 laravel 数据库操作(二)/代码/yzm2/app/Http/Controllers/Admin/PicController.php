<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

// 后台图片管理控制器
class PicController extends Controller
{	

   // 后台商品管理首页方法

	public function index(){

		// 计算数据的总条数

		$tot=\DB::table("pic")->count();

		// 每页展示几条数据
		$length=3;

		// 计算总页数

		$page=ceil($tot/$length);

		// 判断地址栏参数是否存在


		if (isset($_GET['page'])) {
			// 计算分页

			$offset=($_GET['page']-1)*$length;

			// 进行数据库查询
			$data=\DB::select("select * from pic order by sort asc limit $offset,$length");
			// 返回JSON
				// return $data;

			// 返回页面
				return view('admin.pic.page')->with('data',$data);


		}


		// 从数据库中读取相关数据

		$data=\DB::select("select * from pic order by sort asc limit 0,$length");

		// dd($data);

	    // 加载用户管理页面
	    return view('admin.pic.index')->with('data',$data)->with('page',$page);
	}

	// 后台用户管理修改页面
	public function edit($id){

		// 接收需要修改的数据

		$data=\DB::select("select * from pic where id=$id");

		return view('admin.pic.edit')->with("data",$data[0]);

	}
	// 后台用户管理添加页面
	public function create(){
		

		return view('admin.pic.create');

	}

	// 添加操作
	public function store(Request $request){

		// 获取数据

		$a=\DB::insert("insert into pic(id,title,img) values(null,'$_POST[title]','$_POST[img]')");

		// 判断是否插入成功

		if ($a) {
			# code...
			// 成功进行体跳转
			return redirect("admin/pic");
		}else{
			// 失败返回上一个页面
			return back();
		}
	}


	// 修改操作
	public function update(Request $request,$id){

		// 接收数据
		$title=$request->input('title');
		$img=$request->input('img');
		$oldImg=$request->input('oldImg');
		// 书写SQL语句


		$sql="update pic set title='$title' ,img='$img' where id=$id";

		// 执行sql语句

		if (\DB::update($sql)) {
			# code...
			// 判断老图和图片是否一致

			if ($oldImg==$img) {
				# code...
			}else{
				unlink("./Uploads/Goods/".$oldImg);
			}
			return redirect('admin/pic');
		}else{
			return back();
		}
	}


	// 删除操作
	public function destroy(Request $request){
		// 获取删除ID

		$id=$request->input('id');

		// 查巡图片 
		$data=\DB::select("select * from pic where id=$id");

		// 删除操作
		// 删除成功 返回值1
		// 删除失败 返回值0


		if (\DB::delete("delete from pic where id=$id")) {
			# code...

			// 删除成功 删除图片
			unlink("./Uploads/Goods/{$data[0]->img}");
			return "1";
		}else{
			return "0";
		}

	}

	// 删除所有的方法

	public function delAll(Request $request){

		$str=$request->input('str');

		$data=\DB::select("select * from pic where id in($str)");

		// 执行删除语句

		if ($a=\DB::delete("delete from pic where id in($str)")) {
			# code...
			// 删除图片
			foreach ($data as $value) {
				unlink("./Uploads/Goods/{$value->img}");
			}
			return $a;
		}else{
			return 0;
		}

	}

	// ajax 修改数据

	public function sort(Request $request){
		// 修改数据库

		if (\DB::update("update pic set sort={$request->input('val')} where id={$request->input('id')}")) {
			# code...

			echo "1";
		}else{
			echo 0;
		}
	}
}
