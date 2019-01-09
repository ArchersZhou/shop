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



}