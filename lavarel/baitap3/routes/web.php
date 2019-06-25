<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('customer')->group(function(){
    Route::get('/','CustomerController@index')->name('customers.index');

    Route::get('/create','CustomerController@create')->name('customers.create');

    Route::post('/create','CustomerController@store')->name('customers.store');

    Route::get('/{id}/delete','CustomerController@destroy')->name('customers.destroy');

    Route::get('/{id}/edit', 'CustomerController@edit')->name('customers.edit');

    Route::post('/{id}/edit','CustomerController@update')->name('customers.update');

    Route::get('/search', 'CustomerController@search')->name('customers.search');
});

Route::group(['prefix' => 'services'], function () {
    Route::get('/','ServiceController@index')->name('services.index');

    Route::get('/create','ServiceController@create')->name('services.create');

    Route::post('/create','ServiceController@store')->name('services.store');

    Route::get('/{id}/edit','ServiceController@edit')->name('services.edit');

    Route::post('/{id}/edit','ServiceController@update')->name('services.update');

    Route::get('/{id}/delete','ServiceController@destroy')->name('services.destroy');

});
