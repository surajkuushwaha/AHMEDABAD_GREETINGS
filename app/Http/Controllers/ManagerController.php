<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\manager;
use App\address;
use App\userModel;
use Image;
use File;
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
        // $user = userModel::where('id',Auth::user()->id)->get();
        $user = address::where('Address_id',Auth::user()->id)->get();
        return view('Manager.profile',['data'=>$data],['user'=>$user]);
    }
    function editprofile(Request $req)
    {
        // $date = data::findOrFail($id);
        // $data->update($request->all());
        // return back();
        userModel::where('id',Auth::user()->id)->update(
            [
                'name'=>$req->name,'email'=>$req->email,'Phone_no'=>$req->phone
            ]
        );
        address::where('Address_id',Auth::user()->id)->update(
            [
                'street'=>$req->address,'city'=>$req->city,'state'=>$req->state,'Pin_code'=>$req->pin_code
            ]
        );
        return redirect('manager/profile');
        // print_r($request->input());
    }
    function ADDAddress(Request $req)
    {   
        $data = new address;
        $data->Address_id=Auth::user()->id;
        $data->street=$req->street;
        $data->Pin_code=$req->pin_code;
        $data->city=$req->city;
        $data->type='manage';
        $data->state=$req->state;
        echo $data->save();
        return redirect('manager/profile');
        // print_r($req->input());
    }
    function uploadimage(Request $req)
    {        
        if($req->file('image'))
        {   
            $image_path = public_path("uploads/user/".Auth::user()->image);
        
            if(File::exists($image_path)) {
                    File::delete($image_path);
                }
            
            $image = $req->file('image');
            $filename = time().".".$image->getClientOriginalExtension();
            Image::make($image)->resize(150,150)->save(public_path("uploads/user/".$filename));
            $user = Auth::user();
            $user->image = $filename;
            $user->save();          
        }
        return redirect('manager/profile');
        
    }
}
