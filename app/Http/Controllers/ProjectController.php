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

    public function destroy($id)
    {
        Project::find($id)->delete();

        return back();
    }
}
