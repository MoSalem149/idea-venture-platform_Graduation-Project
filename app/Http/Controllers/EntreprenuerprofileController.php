<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntreprenuerprofileController extends Controller
{
    public function index()
    {
        return view('entrepreneur.profile');
    }
}
