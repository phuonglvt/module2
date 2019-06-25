<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('home');
    }

    return view('login_error');
});



Route::group(['prefix' => 'borrowers'], function () {

    Route::get('/', 'BorrowerController@index')->name('borrowers.index');

    Route::get('/create', 'BorrowerController@create')->name('borrowers.create');

    Route::post('/create', 'BorrowerController@store')->name('borrowers.store');

    Route::get('{id}/show', 'BorrowerController@show');

    Route::get('{id}/edit', 'BorrowerController@edit')->name('borrowers.edit');

    Route::post('{id}/edit', 'BorrowerController@update')->name('borrowers.update');

    Route::delete('{id}', 'BorrowerController@destroy');

    Route::get('filter', 'BorrowerController@filterByBook')->name('borrowers.filterByBook');

    Route::get('/search','BorrowerController@search')->name('borrowers.search');

    Route::get('post/create', 'BorrowerController@create');

    Route::post('post', 'BorrowerController@store');

});

Route::group(['prefix' => 'books'], function () {

    Route::get('/', 'BookController@index')->name('book.index');

    Route::get('/create', 'BookController@create')->name('book.create');

    Route::post('/create', 'BookController@store')->name('book.store');

    Route::get('{id}/show', 'BookController@show');

    Route::get('{id}/edit', 'BookController@edit')->name('book.edit');

    Route::post('{id}/edit', 'BookController@update')->name('book.update');

    Route::delete('{id}', 'BookController@destroy')->name('book.destroy');

    Route::get('/filter', 'BookController@filterByCategory')->name('book.filterByCategory');

    Route::get('/search','BookController@search')->name('book.search');

    Route::get('post/create', 'BookController@create');

    Route::post('post', 'BookController@store');

});

//Route::group(['prefix' => 'categories'], function (){
//    Route::get('/','CategoryController@index')->name('categories.index');
//
//    Route::get('/create','CategoryController@create')->name('categories.create');
//
//    Route::post('/create','CategoryController@store')->name('categories.store');
//
//    Route::get('/{id}/edit','CategoryController@edit')->name('categories.edit');
//
//    Route::post('/{id}/edit','CategoryController@update')->name('categories.update');
//
//    Route::get('/{id}/delete','CategoryController@delete')->name('categories.delete');
//});