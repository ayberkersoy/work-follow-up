<?php

namespace App\Http\Controllers;

use App\Progress;
use App\ProgressNote;
use App\NoteCategory;
use App\User;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function store(Request $request)
    {
        Progress::create([
            'discovery_content_id' => $request->id,
            'job' => $request->job,
            'description' => $request->description,
            'amount' => $request->amount,
            'unit' => $request->unit,
            'unit_price' => $request->unit_price,
            'total' => $request->unit_price*$request->amount
        ]);

        return back();
    }

    public function update(Request $request)
    {
        $progress = Progress::find($request->id);
        $progress->job = $request->job;
        $progress->description = $request->description;
        $progress->amount = $request->amount;
        $progress->unit = $request->unit;
        $progress->unit_price = $request->unit_price;
        $progress->total = $request->amount*$request->unit_price;
        $progress->save();
        return back();
    }

    public function storeNote(Request $request)
    {
        $this->validate($request,[
            'note' => 'required'
        ],[
            'note.required' => 'Not alanı gereklidir.'
        ]);

        foreach ($request->users as $user){
            ProgressNote::create([
                'discovery_content_id' => $request->id,
                'note_category_id' => $request->category,
                'user_id' => auth()->id(),
                'to_user_id' => $user,
                'completed_by' => 0,
                'content' => $request->note,
                'status' => 0,
            ]);
        }

        session(['success' => 'Eklendi']);
        return back();
    }

    public function create(Request $request)
    {
        $progress = Progress::find($request->id);
        $categories = NoteCategory::all();
        $users = User::all();
        $notes = ProgressNote::where('discovery_content_id', $request->id)->get();
        return view('hakedis-not', compact('categories', 'users', 'progress', 'notes'));
    }

    public function done(Request $request)
    {
        $note = ProgressNote::find($request->note);
        $note->status = 1;
        $note->completed_by = auth()->id();
        $note->save();
        return back();
    }
}
