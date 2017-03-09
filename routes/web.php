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

    Route::get('sozlesme-ekle', 'ContractController@addThis');

    Route::get('projeler', 'ProjectController@index');
    Route::get('proje-detay/{id}', 'ProjectController@show');

    Route::post('proje-ekle', 'ProjectController@store');
    Route::post('proje-detay/{id}', 'ProjectController@edit');

    Route::delete('projeler/{id}', 'ProjectController@destroy');
});

Auth::routes();