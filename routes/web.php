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

Route::group(['prefix'=>'adm','namespace'=>'Admin'],function (){
    //后台登陆路由

    Route::get('login','LoginController@login');//登陆页



    Route::post('dologin','LoginController@doLogin');//处理登陆逻辑



//验证码
    Route::get('code','LoginController@code');//法一
//Route::get('/code/captcha/{tmp}','Admin\LoginController@captcha');//法二


    Route::get('jiami','LoginController@jiami');//测试加密功能
});




Route::group(['prefix'=>'adm','namespace'=>'Admin','middleware'=>'isLogin'],function (){
    Route::get('index','LoginController@index');//首页
    Route::get('welcome','LoginController@welcome');//欢迎页
    Route::get('loginout','LoginController@loginout');//登出
});
