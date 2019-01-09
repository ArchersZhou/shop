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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::group(['prefix'=>'/admin'],function(){
   Route::get('/index','Admin\IndexController@index');
    Route::get('/login','Admin\IndexController@login');
    Route::get('/home','Admin\IndexController@home');
    Route::get('/Account_Details','Admin\IndexController@Account_Details');
    Route::get('/Add_Brand','Admin\IndexController@Add_Brand');
    Route::get('/admin_Competence','Admin\IndexController@admin_Competence');
    Route::get('/admin_info','Admin\IndexController@admin_info');
    Route::get('/administrator','Admin\IndexController@administrator');
    Route::get('/Ads_list','Admin\IndexController@Ads_list');
    Route::get('/advertising','Admin\IndexController@advertising');
    Route::get('/Amounts','Admin\IndexController@Amounts');
    //
});