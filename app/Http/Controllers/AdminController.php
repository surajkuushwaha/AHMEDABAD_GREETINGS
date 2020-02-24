<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\userModel;
use App\product;
use App\address;
class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.home');
    }
    function user(Request $req)
    {
        $user = userModel::all();
        $address =  address::where('type','user')->get();
        return view('Admin.user',['user1'=>$user],['address'=>$address]);
    }
    
    function edituser(Request $req)
    {
        $data = userModel::where('id',$req->bt)->get();
        $address =  address::where('type','user')->get();
        // $address = userModel::where('Address_id',)
        return view('Admin.Edituser',['data'=>$data],['address'=>$address]);
        // $data = userModel::all();
        // echo userModel::where('id',$req->bt)->all();

        // print_r($req->input());
        // print_r($data->all());
    }
    function finaledit(Request $req)
    {
        // $user = userModel::find($req->id);
        // $address = address::find($req->Address_id);

        // $user->name =$req->name;
        // $user->email =$req->email;
        // $user->address_id = $req->address_id;
        // $user->Phone_no = $req->phone;


        // $address->street=$req->address_street;
        // $address->Pin_code=$req->address_Pin_code;
        // $address->state=$req->address_State;
        // $address->city=$req->address_city;
        // echo $user->save();
        // echo $address->save();
        // print_r($req->input());
        userModel::where('id',$req->id)
                ->update(['name' => $req->name,'email'=>$req->email,'address_id'=>$req->address_id,'Phone_no'=>$req->phone]);
        address::where('Address_id',$req->address_id)
                ->update(['street'=>$req->address_street,'Pin_code'=>$req->address_Pin_code,'state'=>$req->address_State,'city'=>$req->address_city]);
        return redirect('admin/user');
        
    }
    
    function Product(Request $req)
    {
        $data = product::all();
        return view('Admin.Product',['data1'=>$data]);
    }
    function Address(Request $req)
    {
        $data = address::all();
        return view('Admin.Address',['data1'=>$data]);
    }
}
