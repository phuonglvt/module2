<?php

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('contact')->group(function(){
    Route::get('/','ContactController@index')->name('contact.index');

    Route::get('/create','ContactController@create')->name('contact.create');

    Route::post('/create','ContactController@add')->name('contact.add');

    Route::get('/delete/{contact}','ContactController@delete')->name('contact.delete');

    Route::get('/search', 'ContactController@search')->name('contact.search');
});