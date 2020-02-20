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

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/table', 'ProductController@create');

Route::get('/table/add', 'ProductController@registerproduct');

Route::post('/login', 'ProductController@store');

Route::get('/table/info/{id}', 'ProductController@show');

Route::get('/table/edit/{id}', 'ProductController@edit');

Route::post('/update/{id}', 'ProductController@update');

Route::get('/table/delete/{id}', 'ProductController@destroy');
