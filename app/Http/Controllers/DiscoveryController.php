<?php

namespace App\Http\Controllers;

use App\DisCategory;
use App\Discovery;
use App\DiscoveryContent;
use App\Note;
use App\NoteCategory;
use App\Project;
use App\User;
use App\UserNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscoveryController extends Controller
{
    public function addThis()
    {
        $projects = Project::all();
        $categories = DisCategory::all();
        $notecategories = NoteCategory::all();
        return view('kesif-ekle', compact('projects', 'categories', 'notecategories'));
    }

    public function progressAdd()
    {
        $projects = Project::all();
        $categories = DisCategory::all();
        $notecategories = NoteCategory::all();
        return view('hakedis-ekle', compact('projects', 'categories', 'notecategories'));
    }

    public function addContent($project_id, $discovery_id)
    {
        $notecategories = NoteCategory::all();
        $users = User::all();
        return view('proje-kesif-ekle', compact('notecategories', 'project_id', 'discovery_id', 'users'));
    }

    public function progressContent($project_id, $discovery_id)
    {
        $notecategories = NoteCategory::all();
        $users = User::all();
        return view('proje-hakedis-ekle', compact('notecategories', 'project_id', 'discovery_id', 'users'));
    }

    public function index()
    {
        $projects = Project::all();

        return view('kesifler', compact('projects'));
    }

    public function indexProgress()
    {
        $projects = Project::all();

        return view('hakedisler', compact('projects'));
    }

    public function storeDiscovery(Request $request)
    {
        $discovery = Discovery::create([
            'dis_category_id' => $request->dis_category_id,
            'project_id' => $request->project_id,
            'progress' => 0
        ]);
        return redirect('proje-kesif-ekle/'.$request->project_id.'/'.$discovery->id);
    }

    public function progressStore(Request $request)
    {
        $discovery = Discovery::create([
            'dis_category_id' => $request->dis_category_id,
            'project_id' => $request->project_id,
            'progress' => 1
        ]);
        return redirect('proje-hakedis-ekle/'.$request->project_id.'/'.$discovery->id);
    }

    public function storeContent(Request $request)
    {
        $total = floatval($request->amount)*floatval($request->unit_price);
        //dd($total);
        $content = DiscoveryContent::create([
            'discovery_id' => $request->discovery_id,
            'job' => $request->job,
            'description' => $request->description,
            'amount' => $request->amount,
            'unit' => $request->unit,
            'unit_price' => $request->unit_price,
            'total' => floatval($total)
        ]);
        if(!$request->body == NULL){
            $note = Note::create([
                'discovery_id' => $content->id,
                'note_category_id' => $request->note_category_id,
                'content' => $request->body,
                'status' => 0
            ]);
            foreach ($request->users as $user){
                UserNote::create([
                    'note_id' => $note->id,
                    'user_id' => $user,
                    'from_user_id' => Auth::id()
                ]);
            }
        }
        session(['success' => 'Eklendi.']);
        return back();
    }

    public function progressContentStore(Request $request)
    {
        $total = floatval($request->amount)*floatval($request->unit_price);
        //dd($total);
        $content = DiscoveryContent::create([
            'discovery_id' => $request->discovery_id,
            'job' => $request->job,
            'description' => $request->description,
            'amount' => $request->amount,
            'unit' => $request->unit,
            'unit_price' => $request->unit_price,
            'total' => floatval($total)
        ]);
        if(!$request->body == NULL){
            $note = Note::create([
                'discovery_id' => $content->id,
                'note_category_id' => $request->note_category_id,
                'content' => $request->body,
                'status' => 0
            ]);
            foreach ($request->users as $user){
                UserNote::create([
                    'note_id' => $note->id,
                    'user_id' => $user,
                    'from_user_id' => Auth::id()
                ]);
            }
        }
        session(['success' => 'Eklendi.']);
        return back();
    }

    public function show(Request $request)
    {
        $discovery = Discovery::where('project_id', $request->project_id)->where('progress', 0)->get();
        if($discovery->count()){
            return view('kesif', compact('discovery'));
        }
        session(['error' => 'Keşif Bulunamadı.']);
        return back();
    }

    public function showProgress(Request $request)
    {
        $discovery = Discovery::where('project_id', $request->project_id)->get();
        if($discovery->count()){
            return view('hakedis', compact('discovery'));
        }
        session(['error' => 'Hakediş Bulunamadı.']);
        return back();
    }

    public function destroyProgress($id, $project_id)
    {
        DiscoveryContent::find($id)->delete();
        $discovery = Discovery::where('project_id', $project_id)->get();
        return back()->withInput();
    }

    public function edit($id)
    {
        $discovery = DiscoveryContent::find($id);
        return view('hakedis-duzenle', compact('discovery'));
    }

    public function update(Request $request)
    {
        $discovery = DiscoveryContent::find($request->id);
        $discovery->job = $request->job;
        $discovery->description = $request->description;
        $discovery->amount = $request->amount;
        $discovery->unit = $request->unit;
        $discovery->unit_price = $request->unit_price;
        $discovery->last_unit_price = $request->last_unit_price;
        $discovery->save();

        session(['success' => 'Düzenlendi.']);
        return back();
    }
}
