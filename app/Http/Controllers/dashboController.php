<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboController extends Controller
{
    public function index()
    {
        return view('investor\dashbo');
    }
}
