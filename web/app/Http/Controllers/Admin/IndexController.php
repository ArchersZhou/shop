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
}