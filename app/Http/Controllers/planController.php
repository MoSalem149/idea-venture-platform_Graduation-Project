<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class planController extends Controller
{
    public function index()
    {
        return view('plan');
    }
}
