<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\manager;
use App\address;
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
    // function manageredit(Request $req)
    // {
    //     $data = userModel::where('id',$req->bt)->get();
    //     $address =  address::where('type','user')->get();
    //     return view('Manager.manageredit',['data'=>$data],['address'=>$address]);
    // }
    // function finaledit(Request $req)
    // {
    //     userModel::where('id',$req->id)
    //             ->update(['name' => $req->name,'email'=>$req->email,'address_id'=>$req->address_id,'Phone_no'=>$req->phone]);
    //     address::where('Address_id',$req->address_id)
    //             ->update(['street'=>$req->address_street,'Pin_code'=>$req->address_Pin_code,'state'=>$req->address_State,'city'=>$req->address_city]);
    //     return redirect('admin/user');
    // }
}
