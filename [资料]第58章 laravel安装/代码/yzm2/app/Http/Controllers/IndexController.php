<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class IndexController extends Controller
{
    //index 方法

    public function index(){
    	// echo "找呀找呀 终于找到了控制器";

    	$data=DB::table('user')->get();

    	return view('user')->with("data",$data);
    }
}
