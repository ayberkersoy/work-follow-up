<?php

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('cikis', function (){
        Auth::logout();
        return redirect('/');
    });

    Route::get('proje-ekle', function () {
        return view('proje-ekle');
    });

    Route::get('projeler', 'ProjectController@index');

    Route::post('proje-ekle', 'ProjectController@store');

    Route::delete('projeler/{id}', 'ProjectController@destroy');
});

Auth::routes();