<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashbController extends Controller
{
    public function index()
    {
        return view('dashb');
    }
}
