<?php

namespace App\Http\Controllers;

use App\Models\Ideatype;
use Illuminate\Http\Request;

class IdeatypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //project information in view
        $ideatypes = Ideatype::all();
        return view('investor.dashboard' , compact('ideatypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //project deatils or create in profile 
        return view('ideatype\create');
        // return view('categories\create');

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1 validate
        $request->validate([
            "proj_type" => "required"
        ]);


        //2 insert
        $ideatype = new Ideatype();
        $ideatype->proj_type = $request->proj_type;
        $ideatype->save();
        
        //3
        return redirect()->route('Ideatype.index')->with('message' , 'Category Added Successfully');

        //store

    }

    /**
     * Display the specified resource.
     */
    public function show(Ideatype $ideatype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ideatype $ideatype)
    {
        return view('ideatype.edit' , compact('ideatype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ideatype $ideatype)
    {
        // 1 validate
        $request->validate([
            "proj_type" => "required"
        ]);


        //2 update
        $ideatype->proj_type = $request->proj_type;
        $ideatype->save();
        
        //3
        return redirect()->route('Ideatype.index')->with('message' , 'Category Updated Successfully');

        //store
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ideatype $ideatype)
    {
        $ideatype->delete();
        return redirect()->route('Ideatype.index')->with('message ', "Category Deleted Successfuly");
    }
}
