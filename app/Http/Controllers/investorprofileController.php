<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class investorprofileController extends Controller
{
    public function index()
    {
        return view('investor.portfolio');
    }
}
