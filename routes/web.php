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
    Route::get('proje-detay/{id}', 'ProjectController@show');

    Route::post('proje-ekle', 'ProjectController@store');
    Route::post('proje-detay/{id}', 'ProjectController@edit');

    Route::delete('projeler/{id}', 'ProjectController@destroy');

    Route::get('sozlesme-ekle', 'ContractController@addThis');
    Route::get('sozlesmeler', 'ContractController@index');
    Route::get('sozlesme/{id}', 'ContractController@show');

    Route::post('sozlesme-ekle', 'ContractController@store');
    Route::post('sozlesme/{id}', 'ContractController@edit');

    Route::delete('sozlesmeler/{id}', 'ContractController@destroy');

});

Auth::routes();