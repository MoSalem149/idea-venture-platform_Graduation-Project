<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class startupsController extends Controller
{
    public function index()
    {
        return view('investor.startups');
    }
}
