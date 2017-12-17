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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('welcome');
});


/** ======= CONCERT APP ROUTES ======= */
Route::group(['middleware' => ['auth']], function(){
    Route::prefix('concerts')->name('concerts.')->group(function(){

        //Index
        Route::get('/', 'ConcertController@index')->name('index');
        Route::get('index-by-band', 'ConcertController@indexByBand')->name('index-by-band');

        Route::get('{id}', 'ConcertController@show')->name('show');

        // Create
        Route::get('create', 'ConcertController@create')->name('create');
        Route::post('/', 'ConcertController@store')->name('store');

        // Edit/Update
        Route::get('{id}/edit', 'ConcertController@edit')->name('edit');
        // Route::post('{id}', 'ConcertController@update')->name('update');

        // Delete
        Route::get('{id}/delete', 'ConcertController@destroy')->name('delete');
    });
});

/** ======= MOVIE APP ROUTES ======= */
Route::group(['middleware' => ['auth']], function(){
    Route::prefix('movies')->name('movies.')->group(function(){

        // Index
        Route::get('/', 'MovieController@index')->name('index');

        // Create
        Route::get('create', 'MovieController@create')->name('create');
        Route::post('/', 'MovieController@store')->name('store');

    });
});