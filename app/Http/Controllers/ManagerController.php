<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\manager;
use App\userModel;
use Illuminate\Http\Response;
class ManagerController extends Controller
{
    function index()
    {   
        // echo Auth::user()->id;
        $data = manager::where('Manager_id',Auth::user()->id)->get();
        return view('Manager.home',['data'=>$data]);
        
    }
    function profile()
    {   
        $data = manager::where('Manager_id',Auth::user()->id)->get();
        $user = userModel::where('id',Auth::user()->id)->get();
        return view('Manager.profile',['data'=>$data],['user'=>$user]);
    }
    public function editprofile(Request $request)
    {
        // $date = data::findOrFail($id);
        // $data->update($request->all());
        // return back();
        print_r($request->input());
    }
}
