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


Route::get('/kategori','CategoryController@index')->name('kategori');

Route::get('category', 'CategoryController@index');

Route::get('layouts', function(){
    return view('layouts.master');
});

Route::get('index', function(){
    return view('dashboard.index');
});

Route::get('dashboard', function(){
    return view('dashboard');
});
