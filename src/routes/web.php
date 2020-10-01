<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Abe\Demande\Http\Controllers'], function () {

    Route::get('demandes',                  'DemandeController@index')->name('demandes.index');
    Route::get('nouvelle-demande',          'DemandeController@create')->name('demandes.create');
    Route::post('nouvelle-demande',         'DemandeController@store')->name('demandes.create');
    Route::get('nouvelle-detail/{ref}',     'DemandeController@show')->name('demandes.show');
    Route::get('edition-demande/{ref}',     'DemandeController@edit')->name('demandes.edit');
    Route::patch('edition-demande,{ref}',          'DemandeController@update')->name('demandes.update');
    
});


