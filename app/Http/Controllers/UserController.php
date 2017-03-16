<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('kullanicilar', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'surname' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
        ],[
            'name.required' => 'Adı alanı gereklidir.',
            'surname.required' => 'Soyadı alanı gereklidir.',
            'username.required' => 'Kullanıcı Adı alanı gereklidir.',
            'email.required' => 'E-mail alanı gereklidir.',
            'password.required' => 'Şifre alanı gereklidir.',
            'unique' => 'Böyle bir kullanıcı mevcuttur.'
        ]);

        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'username' => $request->username,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->pasword),
        ]);

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
        $user = User::find($id);
        return view('kullanici-detay', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $this->validate($request,[
            'name' => 'required',
            'surname' => 'required',
            'username' => 'required',
            'email' => 'required',
        ],[
            'name.required' => 'Adı alanı gereklidir.',
            'surname.required' => 'Soyadı alanı gereklidir.',
            'username.required' => 'Kullanıcı Adı alanı gereklidir.',
            'email.required' => 'E-mail alanı gereklidir.'
        ]);

        if($request->password == NULL){
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->username = $request->username;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->save();
        }else {
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->username = $request->username;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
        }

        session(['success' => 'Düzenlendi.']);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return back();
    }
}
