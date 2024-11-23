<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntprofileController extends Controller
{
    public function index()
    {
        return view('investor.profile');
    }
}
