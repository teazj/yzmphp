<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class IndexController extends Controller
{
    //index 方法

    public function index(){
    	// echo "找呀找呀 终于找到了控制器";
    	if (empty($_POST['search'])) {
    		$data=DB::table('user')->get();
    	}else{


    		echo "<h2>用户使用了搜索功能呢</h2>";
    		$data=DB::table('user')->get();
    		

    	}
		


    	return view('user')->with("data",$data);
    }

    // 新建UserInfo

    public function UserInfo($a,$sex1){

        var_dump($a);
        var_dump($sex1);

    }

    // abc方法

    public function abc(){
        echo "ABC";

    }
    // shuai方法11
    public function shuai(){
        // echo route('one');

        // return redirect('abc');
        return redirect()->route('one');


    }
}
