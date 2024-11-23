<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class privacyController extends Controller
{
    public function index()
    {
        return view('privacy');
    }
}
