<?php

namespace App\Http\Controllers;

use App\DisCategory;
use App\Discovery;
use App\Project;
use Illuminate\Http\Request;

class DiscoveryController extends Controller
{
    public function addThis()
    {
        $projects = Project::all();
        $categories = DisCategory::all();
        return view('kesif-ekle', compact('projects', 'categories'));
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
        Discovery::create($request->all());
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
