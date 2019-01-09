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
    Route::get('/article_add','Admin\IndexController@article_add');
    Route::get('/article_list','Admin\IndexController@article_list');
    Route::get('/article_Sort','Admin\IndexController@article_Sort');
    Route::get('/Brand_detailed','Admin\IndexController@Brand_detailed');
    Route::get('/Brand_Manage','Admin\IndexController@Brand_Manage');
    Route::get('/Category_Manage','Admin\IndexController@Category_Manage');
    Route::get('/Competence','Admin\IndexController@Competence');
    Route::get('/Cover_management','Admin\IndexController@Cover_management');
    Route::get('/Feedback','Admin\IndexController@Feedback');
    Route::get('/Guestbook','Admin\IndexController@Guestbook');
    Route::get('/integration','Admin\IndexController@integration');
    Route::get('/member_Grading','Admin\IndexController@member_Grading');
    Route::get('/member_show','Admin\IndexController@member_show');
    Route::get('/Order_Chart','Admin\IndexController@Order_Chart');
    Route::get('/order_detailed','Admin\IndexController@order_detailed');
    Route::get('/Order_handling','Admin\IndexController@Order_handling');
    Route::get('/Orderform','Admin\IndexController@Orderform');
    Route::get('/Payment_Configure','Admin\IndexController@Payment_Configure');
    Route::get('/Payment_details','Admin\IndexController@Payment_details');
    Route::get('/payment_method','Admin\IndexController@payment_method');
    Route::get('/picture_add','Admin\IndexController@picture_add');
    Route::get('/product_category_add','Admin\IndexController@product_category_add');
    Route::get('/Products_List','Admin\IndexController@Products_List');
    Route::get('/Refund','Admin\IndexController@Refund');
    Route::get('/Refund_detailed','Admin\IndexController@Refund_detailed');
    Route::get('/Shop_list','Admin\IndexController@Shop_list');
    Route::get('/shopping_detailed','Admin\IndexController@shopping_detailed');
    Route::get('/Shops_Audit','Admin\IndexController@Shops_Audit');
    Route::get('/Sort_ads','Admin\IndexController@Sort_ads');
    Route::get('/System_Logs','Admin\IndexController@System_Logs');
    Route::get('/System_section','Admin\IndexController@System_section');
    Route::get('/Systems','Admin\IndexController@Systems');
    Route::get('/transaction','Admin\IndexController@transaction');
    Route::get('/user_list','Admin\IndexController@user_list');



});