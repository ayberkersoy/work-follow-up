<?php

namespace App\Http\Controllers;

use App\Note;
use App\NoteCategory;
use App\User;
use App\UserNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $notes = UserNote::all();
        return view('notlar', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = NoteCategory::all();
        $users = User::all();
        return view('not-ekle', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = Note::create([
            'discovery_id' => 0,
            'note_category_id' => $request->category,
            'content' => $request->note,
            'status' => 0
        ]);
        foreach ($request->users as $user){
            UserNote::create([
                'note_id' => $note->id,
                'user_id' => $user,
                'from_user_id' => Auth::id()
            ]);
        }
        session(['success' => 'Eklendi.']);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = UserNote::find($id);
        return view('not', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function teknik()
    {
        $notes = UserNote::where('user_id', Auth::id())
            ->get();
        return view('teknik', compact('notes'));
    }

    public function satinAlma()
    {
        $notes = UserNote::where('user_id', Auth::id())
            ->get();
        return view('satin-alma-not', compact('notes'));
    }

    public function muhasebe()
    {
        $notes = UserNote::where('user_id', Auth::id())
            ->get();
        return view('muhasebe-not', compact('notes'));
    }

    public function success($id)
    {
        $note = Note::find($id);
        $note->status = 1;
        $note->save();
        return back();
    }

    public function unSuccess()
    {
        $notes = UserNote::all();
        return view('tumnotlar', compact('notes'));
    }

    public function unCheck($id)
    {
        $note = Note::find($id);
        $note->status = 0;
        $note->save();
        //dd($note);
        return back();
    }
}
