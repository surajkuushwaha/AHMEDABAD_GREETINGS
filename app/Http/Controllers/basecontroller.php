<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basecontroller extends Controller
{
    public function index()
    {
        return view('temp');
    }
}
