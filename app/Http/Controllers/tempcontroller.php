<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //for database
use App\temp;//for using a model

class tempcontroller extends Controller
{
    
    public function model1()
    {
        
        // return temp::all();
        // return temp::find(1);
    }
    public function database()
    {
        // $data = temp::all();
        // $data = temp::where('name','suraj')->get();
        // $data = temp::orderBy('name','desc')->get();
        $data = temp::take(1)->get();

        return view('upload',['data1'=>$data]);

    }
    public function upload(Request $req)
    {
    //    print_r($req->file());
    echo $req->file('img')->store('public');


    }
    function insert(Request $req)
    {
        $user = new temp;
        $user->name = $req->name;
        $user->enroll=$req->enroll;
        echo $user->save();
        
        
        // print_r($req->input());
    }
    function update(Request $req)
    {   
        $data = temp::all();

        return view('upload',['data'=>$data]);
        // echo temp::where('id',$req->id)
        // ->update(['name'=>$req->name,'enroll'=>$req->enroll]);
        // print_r($req->input());
    }
    function update1(Request $req)
    {
        $a = temp::find($req->id);
        $a->name= $req->name;
        $a->enroll=$req->enroll;
        $a->save();
        return redirect('update');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function index()
    {
        return view('home1');
    }
    public function index1()
    {
        return view('home2');
    }
    public function datab()
    {   
        // $user = DB::select('Select * from users where id = 1');
        // $user = DB::table('users')->where('id',1)->get();
        // $user = DB::table('users')->find(1);
        // $user = DB::table('users')->count();
        // $user = DB::table('users')->where('id',1)->delete(); return 1 when excuted
        
        
        // $user = DB::table('users')->insert([
        //     'name'=>'fdg',
        //     'id'=>'3'
        // ]);
        
        // $user = DB::table('users')->where('id',1)->update(['email'=>'patanahi@gmail.com']);

        //$user = DB::table('users')->join('another_table_name','users.id','a_t_n.id')
        // where('user.id',1);
        
        //get() used to get data
        print_r($user);
        // return $user;
    }




    public function up(Request $req)
    {   
        // $req->validate([
        //     'email'=>'required | email'
        // ]);
        // print_r($req->input());//all name or variable
        // print_r($req->input('password'));//perticular name or variable
        // echo "/n".$req->path();//give you path
        // echo "/n".$req->url();//complet url
        // echo "/n".$req->fullurl();//full url
        // echo "/n".$req->Method();//return method $req->isMethod('POST')
        // print_r($req->query());//return query
        $req->session()->put('info',$req->input());//make a session
        // $req->session()->flash('data','patanahi');//flash session deleted after flash

        $info = $req->session()->get('info');//retrive a session
        print_r($info['email']);

        //for view access
        // <?php
        //     $req = session()->get('info');
        //     print_r($req['email']);
        
        
        // if($info['email'] == 'skk@gmail.com')
        // {
        //    return redirect('/');
        // }
        // else
        // return redirect('/home2');
    }
}
