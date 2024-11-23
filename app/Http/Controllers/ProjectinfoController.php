<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectinfoController extends Controller
{
    public function index()
    {
        return view('entrepreneur.projectinfo');
    }
}
