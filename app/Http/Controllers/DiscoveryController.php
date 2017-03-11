<?php

namespace App\Http\Controllers;

use App\DisCategory;
use App\Discovery;
use App\Note;
use App\NoteCategory;
use App\Project;
use Illuminate\Http\Request;

class DiscoveryController extends Controller
{
    public function addThis()
    {
        $projects = Project::all();
        $categories = DisCategory::all();
        $notecategories = NoteCategory::all();
        return view('kesif-ekle', compact('projects', 'categories', 'notecategories'));
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $discovery = Discovery::create([
            'dis_category_id' => $request->dis_category_id,
            'project_id' => $request->project_id,
            'job' => $request->job,
            'description' => $request->description,
            'amount' => $request->amount,
            'unit' => $request->unit,
            'unit_price' => $request->unit_price
        ]);
        Note::create([
            'discovery_id' => $discovery->id,
            'note_category_id' => $request->note_category_id,
            'content' => $request->body,
            'status' => 0
        ]);
        session(['success' => 'Eklendi.']);
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
