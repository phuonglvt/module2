<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//tao group route tasks
Route::group(['prefix' => 'tasks'], function () {
    Route::get('/','TaskController@index')->name('tasks.index');
    Route::get('/create','TaskController@create')->name('tasks.create');
    Route::post('/create','TaskController@store')->name('tasks.store');
    Route::get('/{id}/edit','TaskController@edit')->name('tasks.edit');
    Route::post('/{id}/edit','TaskController@update')->name('tasks.update');
    Route::get('/{id}/destroy','TaskController@destroy')->name('tasks.destroy');
});
