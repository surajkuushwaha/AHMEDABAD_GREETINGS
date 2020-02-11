<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;
use App\product;
class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.home');
    }
    function user(Request $req)
    {
        $user = userModel::all();
        return view('Admin.user',['user1'=>$user]);
    }
    function Product(Request $req)
    {
        $data = product::all();
        return view('Admin.Product',['data1'=>$data]);
    }
}
