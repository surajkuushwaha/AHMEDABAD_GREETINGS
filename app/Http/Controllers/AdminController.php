<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\userModel;
use App\product;
use App\address;
use App\manager;
class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.home');
    }
    function user()
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
    function deleteuse(Request $req)
    {
        userModel::where('id',$req->bt)->delete();
        return redirect('admin/user');
    }
    
    function Product()
    {
        $data = product::all();
        return view('Admin.Product',['data1'=>$data]);
    }
    function productAdd(Request $req)
    {
        $data = new product;
        $data->Product_name = $req->Product_name;
        $data->Product_description = $req->Product_description;
        $data->Amount = $req->Amount;
        $data->Discount = $req->Discount;
        $data->category = $req->category;
        $data->save();
        return redirect('admin/product');

    }
    function DeleteProduct(Request $req)
    {
        product::where('Product_id',$req->bt)->delete();
        return redirect('admin/product');
    }
    function editproduct(Request $req)
    {
        $data = product::where('Product_id',$req->bt)->get();
        return view('Admin.Editproduct',['data'=>$data]);
    }
    function finaleditproduct(Request $req)
    {
        product::where('Product_id',$req->id)->update(['Product_name' => $req->product,'Product_description'=>$req->Product_description,'Amount'=>$req->Amount,'Discount'=>$req->Discount,'category'=>$req->category]);
        // print_r($req->input());
        return redirect('admin/product');
    }
    function Address()
    {
        $data = address::all();
        return view('Admin.Address',['data1'=>$data]);
    }
    function Manageradd(Request $req)
    {
        // print_r($req->input());
        $data = userModel::where('id',$req->bt)->get();
        $a = $data[0];
        if($a->role == 'admin')
        {
            return redirect('admin/user');
        }
        else
        {
            userModel::where('id',$req->bt)->update(['role' => 'manager']);
            $data = new manager;
            $data->Manager_id = $req->bt;
            $data->email = $a->email;
            $data->Phone_no = $a->Phone_no;
            $data->save();
                return redirect('admin/user');
        }

        
    }
    function Managerdelete(Request $req)
    {
        $data = userModel::where('id',$req->bt)->get();
        $a = $data[0];
        if($a->role == 'admin')
        {
            return redirect('admin/user');
        }
        else
        {        
        manager::where('Manager_id',$req->bt)->delete();
        userModel::where('id',$req->bt)->update(['role' => '']);
        return redirect('admin/user');
        }
    }
    function Manager()
    {
        $data = manager::all();
        return view('Admin.Manager',['data'=>$data]);
    }
}
