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

    Route::get('kesif-ekle', 'DiscoveryController@addThis');
    Route::get('kesifler', 'DiscoveryController@index');
    Route::get('proje-kesif-ekle/{project_id}/{discovery_id}', 'DiscoveryController@addContent');
    Route::post('kesif-ekle', 'DiscoveryController@storeDiscovery');
    Route::get('kesif', 'DiscoveryController@show');
    Route::post('proje-kesif-ekle/{project_id}/{discovery_id}', 'DiscoveryController@storeContent');

    Route::get('not-ekle', 'NoteController@create');
    Route::post('not-ekle', 'NoteController@store');
    Route::get('teknik', 'NoteController@teknik');
    Route::get('satin-alma-notlar', 'NoteController@satinAlma');
    Route::get('muhasebe', 'NoteController@muhasebe');
    Route::get('notlar', 'NoteController@index');
    Route::post('notlar/{id}', 'NoteController@success');
    Route::get('not/{id}', 'NoteController@show');

    Route::get('hakedis-ekle', 'DiscoveryController@progressAdd');
    Route::get('proje-hakedis-ekle/{project_id}/{discovery_id}', 'DiscoveryController@progressContent');
    Route::get('hakedisler', 'DiscoveryController@indexProgress');

    Route::post('hakedis-ekle', 'DiscoveryController@progressStore');
    Route::post('proje-hakedis-ekle/{project_id}/{discovery_id}', 'DiscoveryController@progressContentStore');
    Route::get('hakedis', 'DiscoveryController@showProgress');

    Route::delete('hakedis/{id}/{project_id}', 'DiscoveryController@destroyProgress');

    Route::get('hakedis-duzenle/{id}', 'DiscoveryController@edit');
    Route::post('hakedis-duzenle/{id}', 'DiscoveryController@update');
});

Auth::routes();