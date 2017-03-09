<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function addThis()
    {
        $projects = Project::all();
        return view('sozlesme-ekle', compact('projects'));
    }
}
