<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsettingsController extends Controller
{
    public function index()
    {
        return view('entrepreneur.projectsettings');
    }
}
