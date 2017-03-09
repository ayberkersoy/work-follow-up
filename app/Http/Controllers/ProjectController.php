<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projeler', compact('projects'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firm_name' => 'required',
            'project_name' => 'required',
            'address' => 'required',
            'authorized' => 'required',
        ], [
            'required' => 'Gerekli alanları doldurunuz.'
        ]);

        Project::create($request->all());

        return back();
    }

    public function show($id)
    {
        $project = Project::find($id);
        return view('proje-detay', compact('project'));
    }

    public function edit(Request $request)
    {
        $this->validate($request, [
            'firm_name' => 'required',
            'project_name' => 'required',
            'address' => 'required',
            'authorized' => 'required',
        ], [
            'required' => 'Gerekli alanları doldurunuz.'
        ]);

        $project = Project::find($request->id);
        $project->firm_name = $request->firm_name;
        $project->project_name = $request->project_name;
        $project->address = $request->address;
        $project->authorized = $request->authorized;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->save();

        return redirect('projeler');
    }

    public function destroy($id)
    {
        Project::find($id)->delete();

        return back();
    }
}
