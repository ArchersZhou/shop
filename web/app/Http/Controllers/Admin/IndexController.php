<?php
/**
 * Created by PhpStorm.
 * User: Archer
 * Date: 2019/1/9
 * Time: 13:59
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('admin/index');

    }
    public function login(){
        return view('admin/login');
    }
    public function home(){
        return view('admin/home');
    }
    public function Account_Details(){
        return view('admin/Account_Details');
    }
    public function Add_Brand(){
        return view('admin/Add_Brand');
    }
    public function admin_Competence(){
        return view('admin/admin_Competence');
    }
    public function admin_info(){
        return view('admin/admin_info');
    }
    public function administrator(){
        return view('admin/administrator');
    }
    public function Ads_list(){
        return view('admin/Ads_list');
    }
    public function advertising(){
        return view('admin/advertising');
    }
    public function Amounts(){
        return view('admin/Amounts');
    }
    public function article_add(){
        return view('admin/article_add');
    }
    public function article_list(){
        return view('admin/article_list');
    }
    public function article_Sort(){
    return view('admin/article_Sort');
    }
    public function Brand_detailed(){
        return view('admin/Brand_detailed');
    }
    public function Brand_Manage(){
        return view('admin/Brand_Manage');
    }
    public function Category_Manage(){
        return view('admin/Category_Manage');
    }
    public function Competence(){
        return view('admin/Competence');
    }
    public function Cover_management(){
        return view('admin/Cover_management');
    }
    public function Feedback(){
        return view('admin/Feedback');
    }
    public function Guestbook(){
        return view('admin/Guestbook');
    }
    public function integration(){
        return view('admin/integration');
    }
    public function member_Grading(){
        return view('admin/member_Grading');
    }
    public function member_show(){
        return view('admin/member_show');
    }
    public function Order_Chart(){
        return view('admin/Order_Chart');
    }
    public function order_detailed(){
        return view('admin/order_detailed');
    }
    public function Order_handling(){
        return view('admin/Order_handling');
    }
    public function Orderform(){
    return view('admin/Orderform');
    }
    public function Payment_Configure(){
        return view('admin/Payment_Configure');
    }
    public function Payment_details(){
        return view('admin/Payment_details');
    }
    public function payment_method(){
        return view('admin/payment_method');
    }
    public function picture_add(){
        return view('admin/picture_add');
    }
    public function product_category_add(){
        return view('admin/product_category_add');
    }
    public function Products_List(){
        return view('admin/Products_List');
    }
    public function Refund(){
        return view('admin/Refund');
    }
    public function Refund_detailed(){
        return view('admin/Refund_detailed');
    }
    public function Shop_list(){
        return view('admin/Shop_list');
    }
    public function shopping_detailed(){
        return view('admin/shopping_detailed');
    }
    public function Shops_Audit(){
        return view('admin/Shops_Audit');
    }
    public function Sort_ads(){
        return view('admin/Sort_ads');
    }
    public function System_Logs(){
        return view('admin/System_Logs');
    }
    public function System_section(){
        return view('admin/System_section');
    }
    public function Systems(){
        return view('admin/Systems');
    }
    public function transaction(){
        return view('admin/transaction');
    }
    public function user_list(){
        return view('admin/user_list');
    }


}