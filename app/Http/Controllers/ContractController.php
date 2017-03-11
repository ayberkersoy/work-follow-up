<?php

namespace App\Http\Controllers;

use App\Contract;
use App\Project;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function addThis()
    {
        $projects = Project::all();
        return view('sozlesme-ekle', compact('projects'));
    }

    public function index()
    {
        $contracts = Contract::all();
        return view('sozlesmeler', compact('contracts'));
    }

    public function store(Request $request)
    {
        $path = $request->dosya->store('contracts');
        Contract::create([
            'project_id' => $request->project_id,
            'file_path' => 'public/' . $path,
            'file_name' => $request->dosya->getClientOriginalName()
        ]);
        return redirect('sozlesmeler');
    }

    public function show($id)
    {
        $contract = Contract::find($id);

        return view('sozlesme-detay', compact('contract'));
    }

    public function destroy($id)
    {
        Contract::find($id)->delete();
        return back();
    }
}
