<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// // 自定义路由
// Route::get('/user',"IndexController@index");

// // 获取环境配置

// Route::get('env',function(){
// 	var_dump(env('APP_DEBUG'));
// 	var_dump(env('DB_HOST'));
// 	var_dump(env('DB_PREFIX','blog_'));
// });

// // 获取配置

// Route::get('conf',function(){
// 	// 读取 系统配置中的时区
// 	// dd(Config('app.timezone'));
// 	// 读取 邮件配置中的端口
// 	// dd(Config('mail.port'));

// 	Config(['app.title'=>'云知梦，一家伟大的教育公司']);
// 	echo Config('app.title');
// 	echo date('Y-m-d H:i:s');
// });

// 基本路由

	// Route::get('jiben',function(){
	// 	echo "我是基本路由";
	// });

	// // 加载页面

	// Route::get('jiben1',function(){
	// 	return view('home');
	// });

	// // 加载控制器

	// Route::get('jiben2',"JibenController@index");
	// Route::get('jiben3',"Jiben1Controller@index");

// 路由类型
	// 登陆页面
	// Route::get('login',"LoginController@index");

	// // 处理登录操作
	// Route::post('check',"LoginController@check");

	// // put请求

	// Route::get('putWeb','LoginController@putWeb');

	// // put的处理页面
	// Route::put('put','LoginController@put');


// 一个路由实现多种请求

	// Route::match(['get','post'],'/',"IndexController@index");
	// Route::any('/',"IndexController@index");

// 资源路由

	// Route::get('user/index','UserController@index');
	// Route::get('user/add','UserController@add');
	// Route::get('user/edit','UserController@edit');
	// Route::post('user/insert','UserController@insert');
	// Route::post('user/update','UserController@update');
	// Route::get('user/del','UserController@del');


	// Route::resource('Admin','IndexController');

// 带参数的路由
	// Route::get('user/del/{id}',function($id){

	// 	echo $id;
	// });

	// Route::get('UserInfo/{name}/{sex}',function($name,$sex){
	// 	echo $name;

	// 	echo $sex;
	// });

	// Route::get('user/edit/{id?}',function($id="默认值"){
	// 	echo $id;
	// });

	// Route::get('UserInfo/{name}/{sex}',"IndexController@UserInfo");

// 命名路由

	// Route::get('abc',"IndexController@abc")->name('one');

	// Route::get('shuai','IndexController@shuai');

// 了路由组

	Route::group(['namespace'=>'Admin'],function(){
		Route::get('admin','IndexController@index');
		Route::get('admin/user','UserController@index');
		Route::get('admin/goods','GoodsController@index');
	});

	Route::group(['namespace'=>'Home'],function(){
		Route::get('/','IndexController@index');
	});