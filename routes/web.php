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


Route::get('kategori','CategoryController@index')->name('kategori');

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

Route::get('/edit/edit/{category_id}','CategoryController@edit');

Route::post('/datakategori/update','CategoryController@update');

Route::get('/hapus/destroy/{category_id}','CategoryController@destroy');

Route::get('query', 'CategoryController@search');