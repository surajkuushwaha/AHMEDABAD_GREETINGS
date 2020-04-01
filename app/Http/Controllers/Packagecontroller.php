<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Packagecontroller extends Controller
{
    function index()
    {
        return view('Home.home');
    }
    function gold()
    {
        return view('Home.Gold');
    }
}
