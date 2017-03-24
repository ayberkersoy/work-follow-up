<?php

namespace App\Http\Controllers;

use App\DiscoveryContent;
use App\Note;
use App\ProgressNote;
use App\Project;
use App\UserNote;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        $notes = ProgressNote::all();
        $discoveries = DiscoveryContent::all();
        $success = Note::where('status', 1)->get();
        return view('index', compact('projects', 'notes', 'discoveries', 'success'));
    }
}
