<?php

namespace App\Http\Controllers;
use App\product;

use Illuminate\Http\Request;

class Packagecontroller extends Controller
{
    function index()
    {
        return view('Home.home');
    }
    function gold()
    {
        $data = product::where('category',1)->get();
        return view('Home.Gold',['data'=>$data]);
    }
    function Silver()
    {
        $data = product::where('category',2)->get();
        return view('Home.Gold',['data'=>$data]);
    }
    function Bronze()
    {
        $data = product::where('category',3)->get();
        return view('Home.Gold',['data'=>$data]);
    }
}
