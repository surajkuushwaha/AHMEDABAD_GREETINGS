<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tempcontroller extends Controller
{
    public function index()
    {
        return view('home1');
    }
    public function index1()
    {
        return view('home2');
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






        // if($info['email'] == 'skk@gmail.com')
        // {
        //    return redirect('/');
        // }
        // else
        // return redirect('/home2');
        

    }
}
