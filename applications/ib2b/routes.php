<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//vendor\laravel\framework\src\Illuminate\Routing\Route.php
/*
* 'http','https', // 协议类型，默认 http（任选其一即可）
* 'domain' => '', // 域名模式字符串（不借助分组路由依然可以针对域名操作）
* 'as'     => '', // 别名（优先作为线路名称，注意线路覆盖）
* 'prefix' => '', // 前缀（建议在路由分组中设置）
* 'before' => '', // 前置过滤器
* 'uses'   => '', // 控制器方法字符串（支持简写，与 Closure 任选其一）
* Closure,       // 匿名回调函数（支持简写，与 uses 任选其一）
* 'after'  => '', // 后置过滤器

$routes=Route::getRoutes();
foreach($routes as $route)
{
	$path=$route->getPath();
	$action=$route->getAction();
	$comment=$route->getComment();
}

*/

Route::get('/', array('comment' => '用户登录', 'uses' => 'SysLoginController@index'));
Route::get('back_end', array('comment' => '用户桌面', 'uses' => 'SysFrameController@index'));
Route::get('main', array('comment' => '用户主页', 'uses' => 'SysMainController@index'));
Route::get('codes', array('comment' => '序列号', 'uses' => 'SysCodeController@index'));
Route::post('codes/add', array('comment' => '添加序列号', 'uses' => 'SysCodeController@add'));
Route::get('codes/create', array('comment' => '生成CODE', 'uses' => 'SysCodeController@create'));