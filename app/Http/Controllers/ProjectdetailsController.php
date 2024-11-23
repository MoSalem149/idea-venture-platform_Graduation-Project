<?php

namespace App\Http\Controllers;

use App\Models\Projectdetails;
use Illuminate\Http\Request;
use App\Models\Ideatype;
use Illuminate\Support\Facades\Log;
use Auth;

class ProjectdetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectdetailss = Projectdetails::all();
        return view('entrepreneur\projectinfo' , compact('projectdetailss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ideatypes = Ideatype::all();
        return view('entrepreneur\projectsettings' , compact('ideatypes'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('Store method hit');
        Log::info($request->all());

        // Validation rules
        $request->validate([
            'ideatypes_id' => 'required|exists:ideatypes,id',
            'users_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'market_analysis' => 'nullable|string',
            'project_timeline' => 'nullable|string',
            'use_of_funds_and_budget_allocation' => 'required|string',
            'alignment_with_esg' => 'nullable|string',
            'feedback' => 'nullable|string',
            'team_info' => 'nullable|string',
            'invest_need' => 'required|string',
            'proto_type' => 'nullable|string',
            'refrence' => 'nullable|string',
            'exit_strategy' => 'nullable|string',
            'contact_info' => 'nullable|string',
            'behavioral_insights' => 'nullable|string',
            'business_splan' => 'nullable|file|mimes:pdf,doc,docx',
            'investment_proposal' => 'nullable|file|mimes:pdf,doc,docx',
            'pitch_deck' => 'nullable|file|mimes:pdf,doc,docx,mp4',
            'file_path' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png',
            'photo' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png',

        ]);

        try {
            $project = new Projectdetails();
            $project->ideatypes_id = $request->ideatypes_id;
            $project->users_id = $request->users_id;
            $project->name = $request->name;
            $project->description = $request->description;
            $project->market_analysis = $request->market_analysis;

            if ($request->hasFile('business_splan')) {
                $project->business_splan = $request->file('business_splan')->store('documents');
                Log::info('Business Plan uploaded: ' . $project->business_splan);
            }
            if ($request->hasFile('investment_proposal')) {
                $project->investment_proposal = $request->file('investment_proposal')->store('documents');
                Log::info('Investment Proposal uploaded: ' . $project->investment_proposal);
            }
            if ($request->hasFile('pitch_deck')) {
                $project->pitch_deck = $request->file('pitch_deck')->store('documents');
                Log::info('Pitch Deck uploaded: ' . $project->pitch_deck);
            }
            if ($request->hasFile('file_path')) {
                $project->file_path = $request->file('file_path')->store('documents');
                Log::info('File Path uploaded: ' . $project->file_path);
            }
            if ($request->hasFile('photo')) {
                $project->file_path = $request->file('photo')->store('documents');
                Log::info('photo uploaded: ' . $project->photo);
            }

            $project->project_timeline = $request->project_timeline;
            $project->use_of_funds_and_budget_allocation = $request->use_of_funds_and_budget_allocation;
            $project->alignment_with_esg = $request->alignment_with_esg;
            $project->feedback = $request->feedback;
            $project->team_info = $request->team_info;
            $project->invest_need = $request->invest_need;
            $project->proto_type = $request->proto_type;
            $project->refrence = $request->refrence;
            $project->exit_strategy = $request->exit_strategy;
            $project->contact_info = $request->contact_info;
            $project->behavioral_insights = $request->behavioral_insights;

            Log::info('Attempting to save project', $project->toArray());
            $project->save();
            Log::info('Project saved successfully');
        
            return redirect()->route('projectdetails.show', $project->id);
        } catch (\Illuminate\Database\QueryException $e) {
            Log::error('SQL Error: ' . $e->getMessage());
            return back()->with('error', 'There was an error saving the project. Please try again.');
        } catch (\Exception $e) {
            Log::error('Error saving project: ' . $e->getMessage());
            return back()->with('error', 'There was an error saving the project. Please try again.');
        }

    }
       


    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = Projectdetails::find($id);

        if (!$project) {
            return redirect()->route('projectdetails.index')->with('error', 'Project not found');
        }
        

        return view('entrepreneur.projectinfo', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projectdetails $projectdetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projectdetails $projectdetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projectdetails $projectdetails)
    {
        //
    }
}
