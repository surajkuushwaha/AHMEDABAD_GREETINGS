<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\manager;
class ManagerController extends Controller
{
    function index()
    {   
        // echo Auth::user()->id;
        $data = manager::where('Manager_id',Auth::user()->id)->get();
        return view('Manager.home',['data'=>$data]);
        
    }
}
