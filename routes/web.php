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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['auth'])->group(function () {
    Route::get('/', 'TaskController@index');
    Route::post('/store', 'TaskController@store')->name('store');
    Route::get('/edit/{id}', 'TaskController@edit')->name('edit');
    Route::post('/update/{id}', 'TaskController@update')->name('update');
    Route::get('/destroy/{id}', 'TaskController@destroy')->name('destroy');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
